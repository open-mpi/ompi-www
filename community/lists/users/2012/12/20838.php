<?
$subject_val = "[OMPI users] Lustre hints via environment variables/runtime parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 08:47:31 2012" -->
<!-- isoreceived="20121201134731" -->
<!-- sent="Sat, 01 Dec 2012 08:47:09 -0500" -->
<!-- isosent="20121201134709" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Lustre hints via environment variables/runtime parameters" -->
<!-- id="50BA0A5D.7010106_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOAAPT5ZVS2wwjGZrU83ndXzgkLKBR6FKDAnk43Z0GM25v=g1g_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Lustre hints via environment variables/runtime parameters<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-01 08:47:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20839.php">Reuti: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20837.php">Leta Melkamu: "[OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;"</a>
<li><strong>In reply to:</strong> <a href="20836.php">Jaroslaw Slawinski: "[OMPI users] vtrun/otf question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<li><strong>Reply:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using openmpi 1.6.3 with lustre.  I can change the stip count via 
<br>
&quot;striping_unit&quot; but if I try to change the stripe size via 
<br>
&quot;striping_factor&quot;, all my options are ignored and fall back on the 
<br>
default values.
<br>
<p>Here is what I do:
<br>
<p>=============================
<br>
setenv ROMIO_HINTS /home/ericc/romio-hints
<br>
<p>cat $ROMIO_HINTS
<br>
striping_unit 16
<br>
striping_factor 1048576
<br>
<p>rm temp ; mpirun -n 3 idx2 ; lfs getstripe temp
<br>
<p>temp
<br>
lmm_stripe_count:   1
<br>
lmm_stripe_size:    65536
<br>
lmm_stripe_offset:  28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obdidx           objid          objid            group
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28        23877295      0x16c56af                0
<br>
<p>=============================
<br>
<p>If I remove the &quot;striping_factor 1048576&quot; entry in my hint file, I get this:
<br>
<p>=============================
<br>
cat $ROMIO_HINTS
<br>
striping_unit 16
<br>
#striping_factor 1048576
<br>
<p>rm temp ; mpirun -n 3 idx2 ; lfs getstripe temp
<br>
<p>temp
<br>
lmm_stripe_count:   36
<br>
lmm_stripe_size:    65536
<br>
lmm_stripe_offset:  21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obdidx           objid          objid            group
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21        27078098      0x19d2dd2                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5        26516786      0x1949d32                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18        26272707      0x190e3c3                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2        22198271      0x152b7ff                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14        24302770      0x172d4b2                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16        20970007      0x13ffa17                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28        23877307      0x16c56bb                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6        25726827      0x1888f6b                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31        23623835      0x168789b                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23        24231103      0x171bcbf                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;34        23963185      0x16da631                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3        23462711      0x1660337                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13        27515658      0x1a3db0a                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26        23502238      0x1669d9e                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7        26708491      0x1978a0b                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32        21946148      0x14edf24                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17        26912937      0x19aa8a9                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4        24586434      0x17728c2                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;27        23277776      0x16330d0                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9        23634614      0x168a2b6                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11        25769779      0x1893733                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;33        24915767      0x17c2f37                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;29        20790315      0x13d3c2b                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8        25647332      0x18758e4                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20        26938873      0x19b0df9                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19        26182463      0x18f833f                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12        25346469      0x182c1a5                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15        25681819      0x187df9b                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24        23898261      0x16ca895                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10        26554081      0x1952ee1                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25        23512409      0x166c559                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0        28428909      0x1b1ca6d                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30        23953009      0x16d7e71                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22        24117691      0x17001bb                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;35        20972494      0x14003ce                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1        25492821      0x184fd55                0
<br>
=============================
<br>
<p>And if I don't put anything in the file, I get this:
<br>
<p>=============================
<br>
cat $ROMIO_HINTS
<br>
#striping_unit 16
<br>
#striping_factor 1048576
<br>
<p>rm temp ; mpirun -n 3 idx2 ; lfs getstripe temp
<br>
<p>temp
<br>
lmm_stripe_count:   1
<br>
lmm_stripe_size:    1048576
<br>
lmm_stripe_offset:  18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obdidx           objid          objid            group
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18        26272802      0x190e422                0
<br>
<p>=============================
<br>
<p>which are the default values of our lustre.
<br>
<p>Any idea?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20839.php">Reuti: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20837.php">Leta Melkamu: "[OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;"</a>
<li><strong>In reply to:</strong> <a href="20836.php">Jaroslaw Slawinski: "[OMPI users] vtrun/otf question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<li><strong>Reply:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
