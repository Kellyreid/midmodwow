<?php
/*

Vendors Should Sell:
Bandages,

*/

const GENERAL_SUPPLY_VENDORS_HORDE=[
    'Uthok' => '1149',
    'Edwin Harly' => '2140',
    'Barg' => '3481',
    'Mrs. Winters' => '2134',
    'Joshua Kien' => '2115',
    'Kawnie Softbreeze' => '3072',
    'Duokna'=>'3158',
    'Kwaii'>'3186',
    'Moorat Longstride'=>'3076',
    'Jark'=>'3164',
    'Kayren Soothallow'=>'2401',
    'Netali Proudwind'=>'207743',
    'Graud'=>'2820',
    'Grawnal'=>'4082',
    'Jawn Highmesa'=>'4876',
    'Grawl'=>'2908',
    'Bale'=>'2806',
    'Rarck'=>'3625',
    'Tukk'=>'12027',
    'Kuruk'=>'8362',
    'Eleanor Rusk'=>'4555',
    'Asoran'=>'3350',


];
const GENERAL_SUPPLY_VENDORS_ALLIANCE=[
    'Yanni Stoutheart' => '1682',
    'Xandar Goodbeard' => '1685',
    'Kreg Bilmn' => '1691',
    'Gruham Rumdnul' => '1452',
    'Faralorn ' => '7942',
    'Chylina' => '4084',
    'Lindsay Ashlock' => '791',
    'Brog Hamfist' => '151',
    'Aldia' => '3608',
    'Adlin Pridedrift' => '829',
    'Lyrai' => '3587',
    'Brother Danil' => '152',
    'Dalmond' => '4182',
    'Haljan Oakheart' => '3962',
    'Charity Mipsy'=>'4896',
    'Vikki Lonsav'=>'2808',
    'Christi Galvanis'=>'12960',
    'Sarah Raycroft'=>'3541',
    'Daeolyn Summerleaf'=>'12021',
    'Jonivera Farmountain'=>'5134',
    'Malygen'=>'2803',
    'Natheril Raincaller'=>'2084',
    'Mydrannul'=>'4241',
    'Mabel Solaj'=>'227',
    'Ellandrieth'=>'4170',
    'Thurman Mullby'=>'1285',
    'Bryllia Ironbrand'=>'5101',

];
const GENERAL_SUPPLY_VENDORS_NEUTRAL=[
    'Jazzik' => '3498',
    'Jabbey'=>'8139',
    'Nergal'=>'12959',
];

CONST LOOTLESS_CREATURE_IDS = [2,19,29,31,49,54,55,62,65,66,67,70,71,72,73,74,75,78,81,82,87,89,90,93,102,105,106,107,108,109,111,112,120,128,129,130,149,150,151,152,153,161,163,165,167,190,192,196,197,198,200,201,204,207,208,209,211,219,220,221,222,223,224,225,226,227,228,229,230,233,234,235,237,238,239,240,241,242,243,244,246,247,248,250,251,252,253,255,258,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,276,277,278,279,280,281,282,283,284,286,287,289,290,291,294,295,296,297,298,301,302,303,304,305,306,307,308,309,311,318,319,320,321,322,323,324,326,328,329,331,332,333,336,338,339,340,341,342,343,344,346,347,348,349,351,352,353,354,356,358,361,364,365,370,371,372,373,374,375,376,377,380,383,384,385,386,387,388,389,392,393,395,399,400,401,402,403,404,405,406,407,408,409,410,411,416,417,418,421,444,459,460,461,464,465,467,470,482,483,491,494,495,496,497,498,499,509,510,514,516,523,535,536,538,541,542,543,564,566,567,575,576,582,586,592,601,605,606,607,609,610,611,612,613,614,620,631,633,638,648,649,650,651,652,653,656,658,661,663,664,693,698,700,713,714,715,716,717,718,721,725,727,733,734,737,738,739,749,753,756,758,770,773,777,786,789,790,791,793,794,795,796,797,798,799,800,801,802,804,805,806,807,809,810,811,812,820,821,823,826,827,828,829,836,837,840,841,842,843,844,847,848,849,850,851,852,857,859,860,869,878,882,883,885,886,887,890,893,894,895,896,897,900,903,904,906,907,908,911,912,913,914,915,916,917,918,919,924,925,926,927,928,929,931,934,944,945,951,952,953,954,955,956,957,958,959,960,963,980,981,982,983,984,985,986,987,988,989,994,995,996,999,1000,1001,1055,1056,1058,1066,1067,1068,1070,1072,1074,1075,1076,1077,1078,1089,1090,1091,1092,1098,1099,1100,1101,1103,1104,1105,1139,1141,1146,1147,1148,1149,1153,1154,1155,1156,1171,1182,1187,1198,1203,1204,1212,1213,1214,1215,1217,1218,1226,1227,1228,1229,1230,1231,1232,1233,1234,1235,1237,1238,1239,1240,1241,1242,1243,1244,1246,1247,1249,1250,1252,1253,1254,1255,1256,1257,1261,1262,1263,1265,1266,1267,1268,1269,1273,1274,1275,1276,1278,1279,1280,1281,1284,1285,1286,1287,1288,1289,1290,1291,1292,1293,1294,1295,1296,1297,1298,1299,1300,1301,1302,1303,1304,1305,1306,1307,1308,1309,1310,1311,1312,1313,1314,1315,1316,1317,1318,1319,1320,1321,1322,1323,1324,1325,1326,1328,1333,1337,1338,1339,1340,1341,1342,1343,1344,1345,1346,1347,1348,1349,1350,1351,1352,1354,1355,1356,1358,1360,1361,1362,1365,1366,1367,1368,1370,1371,1373,1374,1375,1376,1377,1378,1379,1381,1382,1383,1384,1385,1386,1387,1392,1395,1401,1402,1403,1404,1405,1406,1407,1408,1409,1410,1411,1412,1413,1415,1416,1419,1420,1422,1423,1427,1428,1429,1430,1431,1432,1433,1435,1436,1439,1440,1441,1442,1443,1444,1445,1446,1447,1448,1449,1450,1451,1452,1453,1454,1455,1456,1457,1458,1459,1460,1461,1462,1463,1464,1465,1466,1467,1468,1469,1470,1471,1472,1473,1474,1475,1478,1479,1480,1482,1484,1485,1495,1496,1497,1498,1499,1500,1515,1516,1518,1519,1521,1541,1546,1560,1567,1568,1569,1570,1571,1572,1573,1574,1575,1576,1577,1578,1579,1580,1581,1582,1583,1584,1585,1586,1587,1588,1589,1590,1591,1592,1593,1594,1595,1596,1597,1598,1599,1600,1601,1602,1603,1604,1605,1606,1607,1608,1609,1613,1614,1615,1616,1617,1618,1619,1620,1621,1622,1623,1624,1625,1626,1627,1628,1629,1631,1632,1633,1634,1635,1636,1637,1638,1639,1640,1641,1643,1644,1645,1646,1649,1650,1651,1652,1659,1661,1668,1669,1670,1671,1672,1673,1676,1677,1678,1679,1680,1681,1682,1683,1684,1685,1686,1687,1690,1691,1692,1694,1695,1697,1698,1699,1700,1701,1702,1703,1714,1719,1721,1723,1724,1730,1735,1736,1737,1738,1739,1740,1742,1743,1744,1745,1746,1747,1748,1749,1750,1751,1752,1757,1758,1759,1760,1761,1762,1764,1775,1776,1798,1810,1811,1819,1820,1854,1855,1857,1858,1859,1860,1861,1862,1863,1864,1871,1872,1879,1880,1881,1901,1921,1925,1926,1927,1928,1929,1930,1931,1932,1933,1937,1938,1945,1950,1951,1952,1959,1960,1963,1964,1965,1976,1977,1978,1979,1980,1987,1990,1991,1992,2040,2041,2045,2046,2050,2051,2052,2055,2056,2057,2058,2077,2078,2079,2080,2081,2082,2083,2084,2086,2087,2092,2093,2094,2095,2096,2097,2098,2104,2105,2107,2109,2110,2111,2113,2114,2115,2116,2117,2118,2119,2121,2122,2123,2124,2126,2127,2128,2129,2130,2131,2132,2133,2134,2135,2136,2137,2138,2140,2142,2150,2151,2154,2155,2197,2198,2199,2200,2209,2210,2211,2213,2214,2215,2216,2217,2218,2219,2220,2221,2222,2223,2224,2225,2226,2227,2228,2229,2230,2238,2239,2263,2274,2275,2276,2277,2278,2279,2280,2281,2282,2284,2285,2286,2288,2289,2290,2291,2292,2293,2294,2295,2296,2297,2298,2299,2300,2301,2302,2303,2307,2308,2309,2310,2311,2312,2313,2314,2315,2316,2317,2325,2326,2327,2329,2330,2331,2334,2352,2357,2364,2365,2366,2367,2380,2381,2382,2383,2386,2388,2389,2390,2391,2393,2394,2397,2399,2401,2405,2409,2410,2418,2419,2424,2425,2429,2430,2432,2435,2436,2437,2438,2439,2441,2442,2454,2455,2456,2457,2458,2459,2460,2461,2462,2464,2465,2466,2468,2469,2470,2472,2475,2479,2480,2481,2482,2483,2485,2486,2487,2488,2489,2490,2491,2492,2493,2494,2495,2496,2497,2498,2499,2500,2501,2502,2504,2507,2512,2515,2516,2519,2520,2523,2526,2527,2531,2532,2533,2540,2542,2593,2594,2608,2610,2614,2615,2617,2620,2621,2622,2623,2625,2626,2627,2630,2634,2637,2638,2662,2663,2664,2665,2667,2668,2669,2670,2671,2672,2673,2675,2676,2678,2679,2682,2683,2684,2685,2687,2688,2689,2690,2695,2696,2697,2698,2699,2700,2702,2703,2704,2705,2708,2709,2710,2711,2712,2713,2737,2741,2746,2756,2766,2767,2768,2769,2770,2771,2772,2774,2775,2776,2778,2784,2785,2786,2788,2789,2790,2792,2795,2796,2797,2798,2799,2801,2802,2803,2804,2805,2806,2807,2808,2809,2810,2812,2813,2814,2815,2816,2817,2818,2819,2820,2821,2832,2833,2834,2835,2836,2837,2838,2839,2840,2842,2843,2844,2845,2846,2847,2848,2849,2851,2852,2853,2855,2856,2857,2858,2859,2861,2862,2863,2864,2865,2866,2867,2868,2869,2870,2871,2872,2873,2874,2875,2876,2877,2878,2879,2880,2881,2883,2885,2886,2887,2888,2889,2890,2891,2896,2899,2908,2909,2910,2911,2912,2913,2914,2915,2916,2917,2918,2920,2921,2922,2934,2935,2938,2939,2940,2941,2942,2943,2946,2947,2948,2980,2981,2982,2983,2985,2986,2987,2988,2991,2993,2994,2995,2996,2997,2998,2999,3000,3001,3002,3003,3004,3005,3007,3008,3009,3010,3011,3012,3013,3014,3015,3016,3017,3018,3019,3020,3021,3022,3023,3024,3025,3026,3027,3028,3029,3030,3031,3032,3033,3034,3036,3037,3038,3039,3040,3041,3042,3043,3044,3045,3046,3047,3048,3049,3050,3052,3053,3054,3055,3057,3059,3060,3061,3062,3063,3064,3065,3066,3067,3069,3070,3071,3072,3073,3074,3075,3076,3077,3078,3079,3080,3081,3082,3084,3085,3086,3087,3088,3089,3090,3091,3092,3093,3095,3096,3097,3133,3134,3135,3136,3137,3138,3139,3140,3142,3143,3144,3145,3146,3147,3148,3149,3150,3151,3152,3153,3154,3155,3156,3157,3158,3159,3160,3161,3162,3163,3164,3165,3166,3167,3168,3169,3170,3171,3172,3173,3174,3175,3176,3177,3178,3179,3180,3181,3182,3184,3185,3186,3187,3188,3189,3190,3191,3193,3194,3200,3201,3202,3208,3209,3210,3211,3212,3213,3214,3215,3216,3217,3218,3219,3220,3221,3222,3223,3224,3230,3233,3259,3262,3287,3289,3290,3291,3292,3293,3294,3296,3297,3298,3299,3300,3301,3302,3303,3304,3305,3306,3307,3309,3310,3312,3313,3314,3315,3316,3317,3318,3319,3320,3321,3322,3323,3324,3325,3326,3327,3328,3329,3330,3331,3332,3333,3334,3335,3336,3337,3338,3339,3341,3342,3343,3344,3345,3346,3347,3348,3349,3350,3351,3352,3353,3354,3355,3356,3357,3358,3359,3360,3361,3362,3363,3364,3365,3366,3367,3368,3369,3370,3371,3372,3373,3387,3388,3390,3391,3399,3400,3401,3402,3403,3404,3405,3406,3407,3408,3409,3410,3411,3412,3413,3418,3419,3420,3421,3427,3428,3429,3430,3432,3433,3437,3439,3440,3441,3442,3443,3446,3447,3449,3450,3451,3453,3460,3462,3465,3468,3469,3477,3478,3479,3480,3481,3482,3483,3484,3485,3486,3487,3488,3489,3490,3491,3492,3493,3494,3495,3496,3497,3498,3499,3500,3501,3502,3504,3505,3507,3508,3509,3510,3511,3512,3513,3514,3515,3516,3517,3518,3519,3520,3521,3522,3523,3524,3525,3527,3534,3536,3537,3538,3539,3540,3541,3542,3543,3544,3545,3546,3547,3548,3549,3550,3551,3552,3553,3554,3555,3556,3557,3558,3559,3560,3561,3562,3564,3565,3567,3568,3570,3571,3572,3573,3574,3575,3579,3580,3582,3583,3584,3585,3587,3588,3589,3590,3591,3592,3593,3594,3595,3596,3597,3598,3599,3600,3601,3602,3603,3604,3605,3606,3607,3608,3609,3610,3611,3612,3613,3614,3615,3616,3620,3621,3622,3623,3624,3625,3626,3627,3628,3629,3639,3642,3644,3649,3650,3651,3657,3658,3659,3663,3665,3666,3668,3678,3679,3680,3681,3682,3683,3684,3685,3688,3689,3690,3697,3698,3699,3700,3701,3703,3704,3705,3706,3707,3708,3718,3777,3778,3779,3793,3794,3795,3796,3826,3831,3832,3835,3836,3837,3838,3839,3841,3842,3843,3844,3845,3847,3848,3852,3860,3869,3870,3876,3878,3880,3881,3882,3883,3884,3885,3888,3890,3892,3894,3895,3896,3897,3901,3902,3903,3904,3906,3907,3908,3909,3911,3912,3913,3915,3920,3933,3934,3935,3936,3937,3938,3939,3945,3946,3948,3950,3951,3952,3953,3954,3955,3956,3957,3958,3959,3960,3961,3962,3963,3964,3965,3966,3967,3968,3969,3970,3971,3972,3973,3978,3979,3980,3981,3982,3990,3994,3995,3996,3997,4033,4039,4043,4045,4046,4047,4049,4055,4059,4068,4069,4071,4072,4075,4076,4077,4078,4079,4080,4081,4082,4083,4084,4085,4086,4087,4088,4089,4090,4091,4092,4115,4121,4138,4146,4149,4153,4155,4156,4157,4159,4160,4161,4163,4164,4165,4166,4167,4168,4169,4170,4171,4172,4173,4174,4175,4176,4177,4178,4179,4180,4181,4182,4183,4184,4185,4186,4187,4188,4189,4190,4191,4192,4193,4194,4195,4196,4197,4198,4200,4201,4203,4204,4205,4206,4207,4208,4209,4210,4211,4212,4213,4214,4215,4216,4217,4218,4219,4220,4221,4222,4223,4224,4225,4226,4228,4229,4230,4231,4232,4233,4234,4235,4236,4237,4239,4240,4241,4242,4243,4244,4245,4246,4247,4251,4252,4253,4254,4255,4256,4257,4258,4259,4261,4262,4265,4266,4267,4268,4269,4270,4271,4272,4276,4277,4305,4307,4309,4310,4311,4312,4313,4314,4315,4317,4318,4319,4320,4321,4322,4333,4340,4395,4407,4408,4410,4419,4423,4429,4430,4439,4443,4444,4445,4446,4449,4450,4451,4452,4453,4454,4455,4456,4482,4483,4484,4485,4486,4487,4488,4491,4495,4496,4497,4498,4500,4501,4502,4503,4507,4508,4509,4510,4521,4526,4528,4534,4535,4544,4545,4546,4547,4549,4550,4551,4552,4553,4554,4555,4556,4557,4558,4559,4560,4561,4562,4563,4564,4565,4566,4567,4568,4569,4570,4571,4572,4573,4574,4575,4576,4577,4578,4579,4580,4581,4582,4583,4584,4585,4586,4587,4588,4589,4590,4591,4592,4593,4594,4595,4596,4597,4598,4599,4600,4601,4602,4603,4604,4605,4606,4607,4608,4609,4610,4611,4612,4613,4614,4615,4616,4617,4618,4620,4621,4624,4625,4626,4629,4630,4631,4661,4669,4683,4691,4703,4704,4706,4707,4708,4709,4710,4717,4720,4721,4722,4724,4725,4730,4731,4732,4752,4753,4772,4773,4775,4777,4778,4779,4780,4781,4782,4783,4784,4785,4786,4787,4791,4792,4794,4795,4816,4862,4875,4876,4877,4878,4879,4880,4881,4882,4883,4884,4885,4886,4888,4889,4890,4891,4892,4893,4894,4895,4896,4897,4898,4899,4900,4901,4902,4921,4922,4923,4924,4926,4941,4942,4943,4944,4945,4946,4947,4948,4949,4951,4952,4953,4954,4955,4957,4958,4959,4960,4961,4962,4963,4964,4965,4967,4968,4970,4971,4972,4973,4974,4975,4976,4977,4980,4981,4982,4983,4984,4985,4986,4987,4988,4989,4990,4991,4992,4993,4994,4996,4997,4998,4999,5000,5001,5002,5003,5004,5005,5006,5007,5008,5009,5010,5011,5012,5013,5014,5015,5016,5017,5018,5019,5020,5021,5022,5023,5024,5026,5027,5028,5029,5030,5031,5032,5033,5034,5035,5036,5037,5038,5039,5040,5041,5042,5043,5047,5049,5050,5051,5052,5054,5058,5059,5060,5061,5062,5063,5064,5081,5082,5083,5084,5087,5088,5089,5090,5091,5092,5093,5094,5095,5096,5097,5098,5099,5100,5101,5102,5103,5104,5105,5106,5107,5108,5109,5110,5111,5112,5113,5114,5115,5116,5117,5118,5119,5120,5121,5122,5123,5124,5125,5126,5127,5128,5129,5130,5131,5132,5133,5134,5135,5137,5138,5139,5140,5141,5142,5143,5144,5145,5146,5147,5148,5149,5150,5151,5152,5153,5154,5155,5156,5157,5158,5159,5160,5161,5162,5163,5164,5165,5166,5167,5169,5170,5171,5172,5173,5174,5175,5177,5178,5187,5188,5189,5190,5191,5192,5193,5194,5195,5196,5197,5198,5199,5200,5201,5202,5204,5231,5264,5315,5326,5353,5355,5367,5384,5385,5386,5387,5388,5389,5390,5391,5392,5393,5394,5395,5396,5397,5398,5403,5404,5405,5406,5407,5409,5411,5412,5413,5415,5416,5433,5436,5437,5438,5439,5440,5442,5443,5444,5445,5446,5447,5448,5449,5464,5468,5476,5479,5480,5482,5483,5484,5489,5491,5492,5493,5494,5495,5496,5497,5498,5499,5500,5501,5502,5503,5504,5505,5506,5507,5508,5509,5510,5511,5512,5513,5514,5515,5516,5517,5518,5519,5520,5521,5522,5523,5524,5525,5526,5542,5543,5544,5547,5548,5549,5550,5551,5552,5553,5554,5555,5556,5557,5558,5559,5560,5561,5562,5563,5564,5565,5566,5567,5568,5569,5570,5587,5588,5589,5590,5591,5592,5593,5594,5595,5596,5597,5598,5599,5603,5604,5605,5606,5607,5608,5609,5610,5611,5612,5613,5614,5620,5621,5624,5625,5626,5627,5628,5629,5630,5631,5632,5633,5634,5635,5636,5637,5638,5639,5640,5641,5642,5644,5651,5652,5653,5654,5655,5656,5657,5658,5659,5660,5661,5662,5663,5664,5665,5666,5667,5668,5669,5670,5671,5672,5674,5675,5676,5677,5678,5679,5680,5681,5685,5686,5687,5688,5689,5690,5691,5692,5693,5694,5695,5696,5697,5698,5699,5700,5701,5702,5703,5704,5705,5706,5707,5723,5724,5725,5726,5727,5728,5729,5730,5731,5732,5733,5734,5735,5736,5737,5738,5739,5740,5741,5742,5743,5744,5745,5746,5747,5748,5749,5750,5752,5753,5754,5757,5758,5759,5764,5765,5766,5767,5768,5769,5770,5772,5773,5774,5776,5777,5778,5779,5780,5781,5782,5783,5784,5788,5789,5790,5791,5792,5793,5794,5795,5796,5801,5806,5810,5811,5812,5813,5814,5815,5816,5817,5818,5819,5820,5821,5825,5866,5867,5868,5870,5871,5872,5873,5874,5875,5876,5877,5878,5879,5880,5882,5883,5884,5885,5886,5887,5888,5889,5890,5891,5892,5895,5896,5897,5898,5899,5900,5901,5902,5903,5904,5905,5906,5908,5909,5910,5911,5913,5914,5917,5918,5919,5920,5921,5922,5923,5924,5925,5926,5927,5929,5936,5938,5939,5940,5941,5942,5943,5944,5945,5946,5947,5948,5949,5950,5951,5952,5953,5954,5955,5956,5957,5958,5959,5960,5961,5962,5963,5964,5965,5966,5967,5968,5969,5970,5971,5972,5973,5980,5986,5987,5989,5994,5995,6012,6013,6014,6015,6016,6017,6018,6019,6021,6022,6023,6026,6027,6028,6030,6031,6032,6034,6036,6046,6047,6066,6067,6074,6075,6076,6086,6087,6089,6090,6091,6092,6094,6106,6107,6108,6110,6111,6112,6114,6119,6120,6121,6122,6134,6139,6141,6142,6145,6166,6169,6171,6172,6173,6174,6175,6176,6177,6178,6179,6181,6182,6183,6197,6214,6236,6237,6240,6241,6242,6245,6246,6247,6248,6249,6251,6252,6253,6254,6266,6267,6268,6269,6270,6271,6272,6286,6287,6288,6289,6290,6291,6292,6293,6294,6295,6296,6297,6298,6299,6300,6301,6306,6326,6327,6328,6346,6366,6367,6368,6373,6374,6376,6382,6386,6387,6388,6389,6390,6393,6394,6395,6408,6410,6411,6412,6446,6467,6486,6491,6492,6493,6495,6496,6522,6526,6546,6548,6549,6550,6561,6566,6567,6568,6569,6571,6572,6573,6574,6576,6577,6578,6579,6586,6607,6626,6653,6666,6670,6687,6688,6706,6707,6726,6727,6728,6729,6730,6731,6732,6734,6735,6736,6737,6738,6739,6740,6741,6746,6747,6748,6749,6766,6767,6768,6769,6770,6771,6772,6773,6774,6775,6776,6777,6778,6779,6780,6781,6782,6783,6784,6785,6786,6787,6790,6791,6806,6807,6826,6827,6867,6868,6886,6887,6912,6913,6926,6928,6929,6930,6931,6932,6946,6966,6986,6987,7006,7007,7008,7009,7010,7013,7014,7024,7087,7088,7089,7094,7095,7096,7116,7117,7119,7121,7122,7123,7124,7127,7128,7129,7130,7131,7133,7134,7143,7144,7146,7150,7151,7152,7161,7166,7168,7172,7173,7174,7186,7207,7208,7209,7226,7227,7229,7230,7231,7232,7233,7236,7266,7270,7292,7293,7294,7295,7296,7297,7298,7311,7312,7313,7314,7315,7316,7317,7322,7323,7324,7325,7343,7360,7363,7364,7365,7366,7367,7368,7373,7374,7375,7377,7378,7380,7381,7382,7383,7384,7385,7386,7387,7388,7389,7390,7391,7392,7393,7394,7395,7398,7399,7400,7401,7402,7403,7406,7407,7408,7409,7410,7411,7412,7413,7414,7415,7416,7423,7424,7425,7427,7464,7465,7466,7467,7468,7469,7483,7484,7485,7486,7487,7488,7489,7503,7504,7505,7506,7525,7526,7527,7528,7543,7544,7545,7546,7547,7548,7550,7551,7552,7553,7554,7555,7556,7558,7559,7560,7561,7562,7563,7564,7565,7566,7567,7568,7569,7570,7572,7583,7607,7623,7624,7643,7663,7683,7684,7686,7687,7689,7690,7703,7704,7706,7707,7708,7709,7710,7711,7712,7713,7714,7724,7729,7730,7731,7732,7733,7736,7737,7738,7739,7740,7743,7744,7745,7746,7747,7748,7749,7750,7763,7764,7765,7766,7767,7768,7769,7770,7771,7772,7773,7774,7775,7776,7777,7778,7779,7780,7783,7784,7785,7786,7787,7788,7789,7790,7792,7793,7794,7798,7799,7801,7802,7804,7806,7807,7823,7824,7825,7826,7844,7845,7849,7850,7852,7853,7854,7863,7866,7867,7868,7869,7870,7871,7875,7876,7877,7878,7879,7880,7881,7882,7884,7896,7897,7898,7900,7903,7904,7906,7907,7915,7916,7917,7918,7919,7935,7936,7937,7938,7940,7941,7942,7943,7944,7945,7946,7947,7948,7949,7950,7951,7952,7953,7954,7955,7956,7957,7976,7978,7998,8015,8016,8018,8019,8020,8021,8022,8023,8024,8025,8026,8035,8055,8096,8115,8116,8117,8118,8119,8121,8122,8123,8124,8125,8126,8128,8129,8130,8131,8137,8139,8140,8141,8142,8143,8144,8145,8146,8148,8149,8150,8151,8152,8153,8154,8156,8157,8158,8159,8160,8161,8176,8177,8178,8206,8256,8257,8276,8284,8305,8306,8307,8308,8309,8316,8317,8320,8321,8322,8323,8324,8338,8356,8357,8358,8359,8360,8361,8362,8363,8364,8376,8377,8378,8379,8380,8381,8382,8383,8385,8386,8387,8388,8389,8390,8392,8393,8394,8395,8396,8397,8398,8399,8401,8403,8404,8405,8406,8407,8416,8417,8418,8420,8421,8436,8437,8439,8440,8441,8446,8478,8479,8480,8496,8498,8499,8500,8501,8502,8505,8506,8507,8508,8509,8510,8516,8517,8536,8537,8549,8552,8559,8576,8579,8581,8582,8583,8584,8585,8586,8587,8588,8599,8608,8609,8610,8611,8612,8613,8615,8616,8617,8656,8657,8658,8659,8661,8662,8663,8664,8665,8666,8668,8669,8670,8671,8672,8673,8674,8676,8677,8678,8679,8680,8681,8696,8719,8720,8721,8722,8723,8724,8736,8737,8738,8756,8757,8758,8765,8767,8776,8777,8796,8816,8836,8856,8876,8877,8878,8879,8880,8881,8882,8883,8884,8885,8887,8888,8901,8931,8934,8935,8937,8962,8963,8964,8965,8982,8996,8997,9020,9021,9022,9023,9034,9035,9036,9037,9038,9039,9040,9047,9076,9077,9078,9079,9080,9081,9082,9083,9084,9085,9086,9087,9099,9116,9117,9136,9157,9158,9177,9178,9179,9180,9238,9256,9270,9271,9272,9273,9274,9275,9276,9296,9297,9298,9299,9317,9356,9417,9436,9453,9457,9458,9459,9460,9465,9467,9496,9498,9500,9501,9503,9521,9525,9526,9527,9528,9529,9536,9538,9539,9540,9542,9544,9546,9548,9549,9550,9551,9552,9553,9555,9556,9557,9558,9559,9560,9561,9562,9563,9564,9565,9566,9567,9576,9577,9578,9579,9580,9581,9582,9584,9598,9599,9600,9616,9617,9618,9619,9620,9623,9636,9637,9656,9657,9658,9659,9660,9662,9679,9682,9686,9687,9688,9689,9699,9700,9702,9703,9704,9705,9706,9707,9708,9796,9820,9836,9837,9856,9857,9858,9859,9876,9896,9936,9937,9976,9977,9978,9979,9980,9981,9982,9983,9984,9985,9986,9987,9988,9989,9990,9996,9997,9998,9999,10000,10016,10017,10042,10044,10045,10046,10047,10048,10049,10050,10051,10052,10053,10054,10055,10056,10057,10058,10059,10060,10061,10062,10063,10076,10079,10084,10085,10086,10088,10089,10090,10096,10116,10117,10118,10136,10156,10161,10162,10176,10178,10179,10180,10181,10182,10183,10203,10204,10216,10217,10218,10219,10236,10237,10238,10239,10256,10257,10259,10260,10265,10266,10267,10276,10277,10278,10290,10291,10292,10293,10294,10295,10296,10297,10298,10299,10300,10301,10302,10303,10304,10305,10306,10307,10321,10322,10336,10337,10338,10340,10360,10361,10362,10364,10365,10367,10368,10369,10370,10377,10378,10379,10380,10383,10387,10388,10389,10395,10397,10401,10402,10403,10404,10415,10427,10431,10441,10443,10444,10445,10446,10448,10449,10450,10451,10452,10453,10454,10455,10456,10459,10460,10461,10466,10467,10468,10473,10483,10484,10492,10493,10494,10510,10536,10537,10538,10539,10540,10541,10556,10557,10577,10578,10579,10581,10582,10583,10598,10599,10600,10601,10602,10603,10604,10606,10607,10610,10611,10612,10616,10618,10619,10620,10637,10645,10646,10656,10657,10658,10665,10666,10667,10668,10676,10682,10684,10685,10697,10698,10699,10716,10718,10719,10721,10736,10739,10740,10776,10778,10779,10780,10781,10782,10783,10784,10785,10786,10787,10788,10789,10790,10791,10792,10793,10794,10795,10796,10797,10798,10799,10800,10803,10804,10805,10810,10812,10818,10819,10837,10838,10839,10840,10856,10857,10876,10877,10878,10879,10880,10881,10897,10898,10902,10903,10904,10905,10917,10918,10920,10921,10922,10923,10924,10925,10926,10927,10928,10929,10930,10936,10937,10938,10939,10942,10944,10945,10947,10948,10949,10950,10951,10952,10953,10954,10955,10956,10976,10977,10978,10979,10980,10985,10988,10989,10993,11016,11017,11018,11019,11020,11021,11024,11025,11026,11027,11028,11029,11030,11031,11033,11034,11035,11036,11037,11038,11039,11041,11042,11044,11045,11046,11047,11048,11049,11050,11051,11052,11054,11055,11056,11057,11063,11064,11065,11066,11067,11068,11069,11070,11071,11072,11073,11074,11079,11080,11081,11083,11084,11096,11097,11098,11099,11100,11101,11102,11103,11104,11105,11106,11116,11117,11118,11119,11122,11136,11137,11138,11139,11140,11141,11144,11146,11147,11148,11149,11150,11151,11152,11153,11154,11155,11156,11176,11177,11178,11179,11181,11182,11183,11184,11185,11186,11187,11188,11189,11190,11191,11192,11193,11194,11195,11197,11198,11199,11200,11216,11217,11218,11219,11236,11256,11258,11259,11260,11262,11263,11277,11278,11279,11280,11281,11282,11283,11285,11286,11287,11288,11289,11292,11296,11316,11325,11326,11327,11337,11341,11342,11343,11344,11345,11347,11348,11349,11354,11358,11364,11366,11367,11369,11374,11375,11376,11377,11378,11379,11381,11384,11385,11386,11389,11392,11393,11394,11395,11396,11397,11398,11399,11400,11401,11402,11403,11404,11405,11406,11407,11408,11409,11410,11411,11412,11413,11414,11415,11416,11437,11438,11439,11446,11449,11463,11466,11468,11478,11479,11481,11491,11493,11494,11495,11499,11500,11536,11537,11538,11539,11540,11541,11542,11543,11544,11545,11546,11547,11548,11549,11550,11554,11555,11556,11557,11558,11564,11579,11580,11581,11596,11597,11599,11601,11606,11608,11609,11610,11614,11616,11617,11618,11619,11620,11621,11623,11624,11625,11626,11627,11628,11629,11636,11637,11660,11669,11670,11671,11672,11676,11689,11690,11696,11699,11700,11702,11703,11704,11705,11706,11707,11708,11709,11710,11711,11712,11715,11716,11717,11718,11719,11720,11742,11743,11748,11749,11750,11751,11752,11753,11754,11755,11756,11757,11758,11776,11779,11780,11795,11796,11797,11798,11799,11800,11801,11802,11805,11806,11807,11808,11809,11810,11811,11812,11813,11814,11815,11816,11817,11818,11819,11821,11822,11823,11824,11825,11826,11827,11828,11829,11832,11833,11834,11835,11836,11856,11857,11859,11860,11861,11862,11863,11864,11865,11866,11867,11868,11869,11870,11871,11872,11874,11875,11877,11884,11899,11900,11901,11902,11903,11904,11905,11906,11907,11908,11909,11916,11919,11920,11926,11936,11938,11939,11940,11941,11942,11943,11944,11945,11946,11956,11957,11958,11959,11978,11980,11996,11997,11998,12018,12019,12020,12021,12022,12023,12024,12025,12026,12027,12028,12029,12030,12031,12032,12033,12034,12035,12036,12038,12039,12040,12042,12043,12044,12045,12054,12096,12097,12099,12116,12120,12126,12136,12137,12140,12141,12142,12143,12144,12145,12146,12147,12148,12149,12150,12151,12152,12176,12177,12180,12196,12197,12198,12200,12202,12204,12205,12208,12238,12239,12240,12241,12242,12243,12244,12245,12246,12247,12249,12251,12252,12253,12254,12255,12256,12257,12260,12265,12276,12277,12296,12297,12298,12299,12317,12336,12338,12341,12342,12343,12344,12345,12346,12348,12349,12350,12351,12352,12353,12354,12355,12356,12357,12358,12359,12360,12361,12362,12363,12364,12365,12366,12367,12368,12370,12371,12372,12373,12374,12375,12376,12381,12382,12383,12384,12385,12386,12416,12417,12419,12420,12421,12422,12423,12425,12426,12427,12428,12429,12430,12434,12458,12462,12466,12469,12470,12473,12480,12481,12516,12517,12536,12557,12576,12577,12578,12580,12581,12596,12616,12617,12636,12656,12696,12716,12717,12718,12719,12720,12721,12722,12723,12724,12737,12738,12740,12741,12756,12757,12758,12776,12777,12778,12779,12780,12781,12782,12783,12784,12785,12786,12787,12788,12789,12790,12791,12792,12793,12794,12795,12796,12797,12798,12799,12804,12805,12806,12807,12818,12819,12837,12857,12861,12864,12866,12867,12877,12898,12903,12904,12916,12917,12919,12920,12922,12923,12924,12925,12936,12937,12938,12939,12941,12942,12943,12944,12956,12957,12958,12959,12960,12961,12962,12996,12997,12998,12999,13000,13016,13017,13018,13056,13076,13082,13083,13084,13085,13116,13117,13118,13148,13156,13158,13159,13161,13177,13178,13216,13217,13219,13220,13221,13277,13278,13281,13283,13321,13322,13338,13339,13417,13418,13420,13429,13430,13431,13432,13433,13434,13435,13436,13444,13445,13456,13476,13477,13496,13516,13517,13518,13519,13520,13521,13522,13523,13533,13616,13619,13620,13636,13656,13697,13698,13699,13716,13717,13736,13737,13743,13756,13778,13796,13836,13837,13838,13839,13842,13843,13856,13857,13876,13916,13917,13936,13976,13977,14016,14017,14018,14019,14021,14022,14023,14024,14025,14026,14027,14028,14029,14030,14031,14041,14042,14061,14062,14063,14081,14101,14121,14122,14141,14142,14143,14144,14145,14146,14147,14148,14161,14162,14181,14182,14183,14184,14201,14241,14242,14261,14262,14263,14264,14265,14274,14301,14302,14304,14305,14306,14307,14309,14310,14311,14312,14329,14330,14331,14332,14333,14334,14335,14336,14337,14338,14341,14346,14347,14348,14350,14352,14353,14355,14358,14361,14362,14363,14364,14365,14366,14367,14368,14369,14370,14371,14372,14373,14374,14375,14376,14377,14378,14379,14380,14381,14382,14383,14386,14387,14388,14389,14390,14391,14392,14393,14394,14395,14396,14397,14401,14402,14403,14404,14406,14421,14422,14423,14434,14436,14437,14438,14439,14440,14441,14442,14443,14444,14449,14450,14451,14452,14453,14456,14459,14463,14465,14466,14469,14470,14480,14481,14482,14483,14484,14485,14486,14489,14493,14494,14495,14496,14497,14498,14499,14500,14501,14503,14504,14505,14508,14511,14512,14513,14514,14524,14525,14526,14527,14528,14529,14531,14538,14539,14540,14541,14542,14543,14544,14545,14546,14547,14548,14549,14550,14551,14552,14553,14554,14555,14556,14557,14558,14559,14560,14561,14562,14563,14565,14566,14567,14568,14581,14602,14605,14606,14622,14623,14624,14625,14626,14627,14628,14629,14630,14631,14632,14633,14634,14635,14636,14637,14641,14642,14643,14644,14645,14646,14662,14663,14664,14666,14667,14668,14681,14683,14685,14687,14688,14689,14691,14692,14694,14696,14698,14699,14700,14701,14702,14703,14704,14705,14706,14707,14708,14709,14710,14711,14712,14713,14714,14715,14717,14718,14719,14720,14721,14722,14723,14724,14725,14726,14727,14728,14729,14730,14731,14732,14733,14734,14735,14736,14737,14738,14739,14740,14741,14742,14743,14744,14745,14746,14751,14752,14753,14754,14755,14756,14757,14758,14761,14762,14764,14773,14776,14781,14801,14822,14823,14824,14826,14827,14828,14829,14830,14831,14832,14833,14841,14842,14843,14844,14845,14846,14847,14848,14849,14850,14851,14852,14853,14854,14855,14856,14857,14858,14859,14860,14864,14865,14866,14867,14868,14869,14870,14871,14873,14874,14875,14876,14877,14878,14879,14881,14884,14885,14886,14892,14893,14894,14901,14902,14903,14904,14905,14906,14908,14909,14910,14911,14912,14913,14921,14941,14942,14943,14944,14945,14946,14947,14948,14961,14962,14963,14964,14965,14966,14967,14968,14981,14982,14984,14986,14987,14988,14989,14990,14991,14994,15001,15002,15003,15004,15005,15006,15007,15008,15009,15010,15011,15012,15021,15022,15041,15042,15045,15046,15047,15061,15062,15063,15064,15065,15066,15068,15069,15070,15071,15072,15073,15074,15075,15076,15077,15078,15079,15080,15081,15086,15087,15088,15089,15090,15091,15101,15102,15103,15104,15105,15106,15107,15108,15109,15110,15112,15113,15115,15116,15117,15118,15119,15121,15122,15123,15124,15125,15126,15127,15128,15130,15131,15133,15134,15135,15136,15137,15138,15139,15140,15141,15142,15143,15144,15145,15146,15151,15152,15153,15154,15155,15156,15157,15158,15159,15160,15161,15163,15164,15165,15166,15167,15169,15170,15171,15172,15173,15174,15175,15176,15177,15178,15179,15180,15181,15182,15183,15184,15185,15186,15187,15188,15189,15190,15191,15192,15193,15194,15195,15197,15198,15199,15210,15214,15216,15217,15218,15219,15221,15222,15223,15224,15226,15227,15228,15231,15232,15234,15237,15238,15239,15241,15242,15243,15244,15245,15248,15251,15253,15254,15255,15256,15257,15258,15259,15260,15261,15270,15282,15293,15300,15302,15303,15304,15306,15309,15310,15313,15314,15315,15316,15317,15322,15326,15328,15329,15330,15331,15332,15334,15337,15342,15344,15345,15346,15347,15349,15350,15351,15352,15353,15354,15356,15357,15358,15359,15360,15361,15362,15363,15364,15368,15373,15374,15375,15376,15377,15378,15379,15380,15381,15382,15383,15384,15387,15393,15394,15395,15410,15411,15412,15413,15414,15415,15419,15421,15422,15423,15424,15425,15426,15427,15428,15429,15431,15432,15434,15435,15436,15437,15440,15441,15442,15444,15445,15446,15448,15449,15450,15451,15452,15453,15454,15455,15456,15457,15458,15459,15460,15463,15464,15466,15469,15471,15472,15473,15475,15476,15477,15481,15491,15495,15498,15499,15500,15502,15503,15504,15505,15506,15507,15508,15512,15514,15515,15518,15519,15520,15521,15522,15524,15525,15526,15527,15528,15529,15530,15532,15533,15534,15535,15536,15537,15538,15539,15540,15545,15546,15549,15553,15554,15555,15556,15557,15558,15559,15560,15561,15562,15563,15564,15565,15566,15567,15568,15569,15570,15572,15573,15574,15575,15576,15577,15578,15579,15580,15581,15582,15583,15584,15585,15586,15587,15588,15589,15590,15592,15593,15594,15595,15596,15597,15598,15599,15600,15601,15602,15603,15604,15605,15606,15607,15608,15609,15610,15611,15612,15613,15614,15615,15616,15617,15618,15619,15620,15621,15622,15623,15624,15626,15627,15628,15629,15630,15631,15632,15633,15634,15659,15660,15661,15663,15664,15665,15666,15667,15672,15675,15676,15677,15678,15679,15680,15681,15682,15683,15684,15686,15693,15694,15695,15696,15698,15699,15700,15701,15702,15703,15704,15705,15706,15707,15708,15709,15710,15711,15712,15713,15714,15715,15716,15717,15718,15719,15720,15721,15722,15723,15724,15725,15726,15728,15729,15730,15731,15732,15733,15734,15735,15736,15737,15738,15739,15745,15746,15760,15761,15762,15763,15764,15765,15766,15767,15768,15769,15770,15771,15772,15773,15774,15775,15776,15777,15778,15780,15781,15782,15783,15784,15785,15786,15787,15788,15789,15790,15791,15792,15793,15794,15795,15796,15797,15798,15799,15800,15801,15802,15803,15804,15805,15809,15832,15835,15838,15839,15840,15841,15842,15843,15844,15845,15846,15847,15848,15849,15850,15851,15852,15853,15854,15855,15856,15857,15858,15859,15860,15861,15862,15863,15864,15865,15866,15867,15868,15869,15870,15871,15872,15873,15874,15875,15876,15877,15878,15879,15880,15881,15882,15883,15884,15885,15886,15887,15888,15889,15890,15891,15892,15893,15894,15895,15896,15897,15898,15899,15900,15901,15902,15903,15904,15905,15906,15907,15908,15909,15910,15911,15912,15913,15914,15915,15916,15917,15918,15922,15925,15929,15930,15933,15934,15957,15961,15962,15963,15964,15972,15973,15977,15982,15983,15984,15985,15991,15992,15993,15996,15997,15998,15999,16001,16002,16003,16004,16005,16006,16007,16008,16009,16012,16013,16014,16015,16016,16019,16023,16024,16026,16027,16030,16031,16032,16033,16034,16035,16036,16037,16038,16039,16040,16041,16044,16045,16046,16047,16048,16049,16050,16051,16052,16053,16054,16055,16056,16057,16058,16062,16063,16064,16065,16066,16068,16069,16070,16073,16075,16076,16077,16078,16079,16081,16082,16083,16084,16085,16086,16089,16090,16091,16092,16093,16094,16096,16098,16099,16100,16103,16104,16105,16106,16107,16108,16109,16110,16111,16112,16113,16114,16115,16116,16119,16120,16121,16123,16124,16125,16126,16127,16128,16129,16131,16132,16133,16134,16135,16136,16137,16138,16139,16140,16142,16146,16148,16149,16150,16156,16157,16158,16166,16172,16182,16188,16211,16212,16214,16218,16225,16226,16227,16228,16229,16230,16232,16233,16234,16235,16236,16241,16254,16255,16256,16281,16283,16284,16285,16286,16290,16297,16306,16336,16338,16356,16359,16360,16361,16363,16365,16369,16371,16372,16373,16374,16375,16376,16377,16378,16381,16382,16384,16385,16386,16387,16390,16392,16394,16395,16396,16398,16399,16400,16401,16416,16417,16418,16419,16420,16421,16427,16428,16429,16430,16431,16432,16433,16434,16435,16436,16439,16440,16441,16445,16450,16454,16455,16456,16458,16474,16478,16479,16484,16486,16490,16493,16494,16495,16505,16506,16508,16509,16510,16511,16512,16513,16531,16536,16543,16547,16548,16549,16573,16592,16604,16606,16609,16697,16698,16701,16775,16776,16777,16778,16779,16781,16783,16784,16785,16786,16787,16788,16803,16817,16818,16861,16889,16890,16891,16892,16893,16894,16895,16979,16980,16981,16982,16983,16984,16985,16986,16987,16988,16989,16990,16995,16998,16999,17003,17025,17031,17032,17038,17041,17048,17049,17050,17051,17055,17066,17068,17069,17070,17072,17074,17075,17078,17079,17080,17081,17082,17090,17163,17209,17231,17239,17249,17252,17254,17255,17258,17266,17284,17286,17293,17313,17415,17466,17598,17635,17647,17660,17685,17688,17689,17690,17691,17696,17697,17698,17699,17719,17720,17765,17766,17794,17795,17804,17869,17995,17996,18039,18078,18153,18199];
