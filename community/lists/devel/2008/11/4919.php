<?
$subject_val = "[OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 12:39:42 2008" -->
<!-- isoreceived="20081117173942" -->
<!-- sent="Mon, 17 Nov 2008 18:39:35 +0100 (CET)" -->
<!-- isosent="20081117173935" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3 PML default choice" -->
<!-- id="Pine.LNX.4.64.0811171806290.26842_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3 PML default choice<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-17 12:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4920.php">Ethan Mallove: "[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Previous message:</strong> <a href="4918.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5136.php">Tim Mattox: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5136.php">Tim Mattox: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>In testing the 1.3b2, I have encountered a rather strange behaviour.
<br>
First the setup:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dual-CPU dual-core x86_64 with Myrinet 10G card
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self compiled Linux kernel 2.6.22.18, MX 1.2.7(*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GCC-4.1.2 (from Debian etch), Torque 2.1.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI 1.3b2 (tar.gz from download page)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMB 3.1
<br>
<p>(*) I'm actually tracking a problem together with Myricom people, so 
<br>
it's not a vanilla 1.2.7, but 1.2.7 with a tiny patch; I believe that 
<br>
this has no influence
<br>
<p>When starting an IMB run with the default settings, in all collective 
<br>
communication functions I see huge jumps around 32-1024 bytes and flat 
<br>
results around 1K-16K like:
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Allgatherv
<br>
# #processes = 64
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.19         0.21         0.19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        35.29        35.30        35.29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        36.01        36.03        36.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        38.97        38.98        38.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        42.12        42.13        42.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        45.76        45.77        45.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000     19991.83     20011.84     20005.29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000     38561.52     38599.66     38587.74
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000     58263.81     58305.74     58293.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000     77382.83     77425.93     77412.49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000     95981.97     96022.70     96010.73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000    480838.00    481214.78    481027.05
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000    480522.97    480917.02    480727.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000    480762.69    481134.49    480955.03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000    481136.70    481505.36    481334.86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000    483629.46    483889.28    483759.38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000     23809.47     23810.27     23809.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640      7085.58      7085.91      7085.69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320     11928.29     11929.29     11928.72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160     22174.66     22177.67     22175.94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80     42270.91     42283.90     42277.55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40     82389.85     82461.10     82428.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20    161347.04    161624.54    161485.84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10    321467.52    322562.79    322019.24
<br>
<p>This happens on various numbers of nodes and is reproducable - I have 
<br>
repeated the run 5 times on 8 nodes.
<br>
<p>I have not seen such results with 1.2.x series with either OB1+BTL or 
<br>
CM+MTL, timing increases rather smoothly. Trying various options with 
<br>
1.3b2:
<br>
<p>--mca pml cm --mca mtl mx		works well
<br>
--mca pml cm --mca btl mx,sm,self	works well
<br>
--mca pml ob1 --mca btl mx,sm,self	jumps like above
<br>
<p><span class="quotelev1">&gt;From what I know, the 1.2.x series defaulted to OB1+BTL; CM was only 
</span><br>
possible with a MTL which internally implemented sm and self, so 
<br>
second test above would have failed (please correct me if I'm wrong).
<br>
<p>The README for 1.3b2 specifies that CM is now chosen if possible; in 
<br>
my trials, when I specify CM+BTL, it doesn't complain and works well.
<br>
However either the default (no options) or OB1+BTL leads to the jumps 
<br>
mentioned above, which makes me believe that OB1+BTL is still chosen 
<br>
as default, contrary to what the README specifies.
<br>
<p>So there are 2 issues:
<br>
- which is right, the README or the runtime behaviour that I see ?
<br>
- is it normal for the OB1+BTL to behave so poorly with MX ?
<br>
<p>Thanks for any insight into this issues.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4920.php">Ethan Mallove: "[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Previous message:</strong> <a href="4918.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5136.php">Tim Mattox: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5136.php">Tim Mattox: "Re: [OMPI devel] 1.3 PML default choice"</a>
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
