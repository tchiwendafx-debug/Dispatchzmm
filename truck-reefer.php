<?php require __DIR__.'/config.php'; start_session(); if (empty($_SESSION['uid'])) { go('login.html?error=required&next='.urlencode(basename(__FILE__))); } ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"><title>Refrigerator Trucks | Dispatch</title><style>
:root{--bg:#0a1320;--gold:#f0b64b;--text:#f2f5f9;--mut:#9fb0c3;box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}
*{box-sizing:border-box}body{margin:0;font-family:Inter,"Segoe UI",Arial,sans-serif;background:radial-gradient(1000px 500px at 85% -10%,#1d3558 0%,transparent 60%),var(--bg);color:var(--text);min-height:100vh}
.bar{display:flex;justify-content:space-between;align-items:center;padding:18px 6%;position:sticky;top:0;z-index:5;background:rgba(10,19,32,.72);backdrop-filter:blur(14px);border-bottom:1px solid rgba(255,255,255,.07)}
.brand{font-weight:900;letter-spacing:4px;font-size:18px}.brand i{color:var(--gold);font-style:normal}
.back{color:var(--text);text-decoration:none;font-size:12px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:10px 16px;border:1px solid rgba(255,255,255,.2);border-radius:999px}.back:hover{background:var(--gold);color:#172638;border-color:var(--gold)}
.wrap{max-width:1200px;margin:0 auto;padding:56px 5% 20px}
.pill{display:inline-block;color:var(--gold);background:rgba(240,182,75,.1);border:1px solid rgba(240,182,75,.3);padding:7px 14px;border-radius:999px;font-size:11px;font-weight:800;letter-spacing:2.5px;text-transform:uppercase}
h1{font-size:clamp(32px,5vw,56px);line-height:1.05;letter-spacing:-1.5px;margin:20px 0 10px}h1 span{background:linear-gradient(90deg,#f0b64b,#ffd98a);-webkit-background-clip:text;background-clip:text;color:transparent}
.sub{color:var(--mut);margin:0 0 30px;line-height:1.7}
.tw{overflow-x:auto;border:1px solid rgba(255,255,255,.1);border-radius:18px;background:rgba(255,255,255,.03)}
table{width:100%;min-width:980px;border-collapse:collapse;font-size:14px}
th{text-align:left;padding:16px 18px;font-size:11px;letter-spacing:1.8px;text-transform:uppercase;color:var(--gold);background:rgba(255,255,255,.05);white-space:nowrap}
td{padding:18px;border-top:1px solid rgba(255,255,255,.07);color:#dbe4ee;vertical-align:middle}tr:hover td{background:rgba(255,255,255,.03)}
td.g{font-weight:700;color:#fff}.tn{text-align:center}
.st{display:inline-block;padding:6px 12px;border-radius:999px;font-size:11px;font-weight:800;letter-spacing:1px;text-transform:uppercase}
.Open{background:rgba(61,220,132,.15);color:#4be38f}.Assigned{background:rgba(240,182,75,.15);color:var(--gold)}.Closed{background:rgba(159,176,195,.15);color:var(--mut)}
.dt{display:inline-block;text-decoration:none;background:var(--gold);color:#172638;padding:9px 16px;border-radius:999px;font-size:11px;font-weight:900;letter-spacing:1px;text-transform:uppercase;white-space:nowrap}.dt:hover{filter:brightness(1.08)}
.hint{color:#6f8097;font-size:12px;margin-top:12px}
footer{margin-top:50px;padding:26px 6%;text-align:center;color:#6f8097;font-size:12px;border-top:1px solid rgba(255,255,255,.07)}
.legend{display:flex;gap:16px;flex-wrap:wrap;margin:-10px 0 24px;font-size:12px;color:#9fb0c3}.legend b{display:inline-block;width:9px;height:9px;border-radius:50%;margin-right:6px}.tw table{min-width:760px}</style></head><body>
<div class="bar"><div class="brand">DISPATCH<i>.</i></div><a class="back" href="truck-sourcing.html">&larr; Truck options</a></div>
<div class="wrap"><span class="pill">Truck Sourcing</span><h1><span>Refrigerator Trucks</span></h1><p class="sub">Tap WhatsApp or Gmail on a truck to ask if it is available.</p><div class="legend"><span><b style="background:#4be38f"></b>Available</span><span><b style="background:#f0b64b"></b>Pending</span><span><b style="background:#ff6b6b"></b>Busy</span></div>
<div class="tw"><table><thead><tr><th>Status</th><th>Truck</th><th>Going to</th><th>Rate Requested</th><th>Contact</th></tr></thead><tbody><tr><td colspan="5" class="empty" style="text-align:center;padding:50px 20px;color:#9fb0c3">No trucks listed yet. New trucks will show here.</td></tr></tbody></table></div>
<div class="hint">Swipe sideways to see all columns.</div></div>
<footer>© 2026 DISPATCH. All rights reserved.</footer></body></html>