<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 13:28:38 2009" -->
<!-- isoreceived="20090113182838" -->
<!-- sent="Tue, 13 Jan 2009 13:28:34 -0500" -->
<!-- isosent="20090113182834" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="ea86ce220901131028g41083b23j7f859fc51274fe39_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0811171806290.26842_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 PML default choice<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 13:28:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5137.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4919.php">Bogdan Costescu: "[OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bogdan,
<br>
Sorry for such a late reply to your e-mail.  Glad to hear that the
<br>
performance anomaly you mentioned below is now gone with 1.3rc3.
<br>
But I noticed that we either didn't explain something well enough, or not
<br>
at all...  The cm PML does not use BTLs..., only MTLs,  so your
<br>
suggested commandline of:
<br>
&nbsp;&nbsp;--mca pml cm --mca btl mx,sm,self
<br>
does not do what you think... the BTL selection is ignored.
<br>
Thus the above is equivalent to:
<br>
&nbsp;&nbsp;--mca pml cm
<br>
And on a machine with MX as the high speed interconnect,
<br>
would be equivalent to:
<br>
&nbsp;&nbsp;--mca pml cm --mca mtl mx
<br>
<p>So, in short, the PML selection (ob1 or cm) use distinct sets of lower
<br>
level drivers, with ob1 using potentially multiple BTLs, and CM using
<br>
a single MTL module.  This is kind of explained in this FAQ entry:
<br>
<a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl-mx">http://www.open-mpi.org/faq/?category=myrinet#myri-btl-mx</a>
<br>
<p>On Mon, Nov 17, 2008 at 12:39 PM, Bogdan Costescu
<br>
&lt;Bogdan.Costescu_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In testing the 1.3b2, I have encountered a rather strange behaviour.
</span><br>
<span class="quotelev1">&gt; First the setup:
</span><br>
<span class="quotelev1">&gt;        dual-CPU dual-core x86_64 with Myrinet 10G card
</span><br>
<span class="quotelev1">&gt;        self compiled Linux kernel 2.6.22.18, MX 1.2.7(*)
</span><br>
<span class="quotelev1">&gt;        GCC-4.1.2 (from Debian etch), Torque 2.1.10
</span><br>
<span class="quotelev1">&gt;        OpenMPI 1.3b2 (tar.gz from download page)
</span><br>
<span class="quotelev1">&gt;        IMB 3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*) I'm actually tracking a problem together with Myricom people, so it's
</span><br>
<span class="quotelev1">&gt; not a vanilla 1.2.7, but 1.2.7 with a tiny patch; I believe that this has no
</span><br>
<span class="quotelev1">&gt; influence
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When starting an IMB run with the default settings, in all collective
</span><br>
<span class="quotelev1">&gt; communication functions I see huge jumps around 32-1024 bytes and flat
</span><br>
<span class="quotelev1">&gt; results around 1K-16K like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking Allgatherv
</span><br>
<span class="quotelev1">&gt; # #processes = 64
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;            0         1000         0.19         0.21         0.19
</span><br>
<span class="quotelev1">&gt;            1         1000        35.29        35.30        35.29
</span><br>
<span class="quotelev1">&gt;            2         1000        36.01        36.03        36.02
</span><br>
<span class="quotelev1">&gt;            4         1000        38.97        38.98        38.98
</span><br>
<span class="quotelev1">&gt;            8         1000        42.12        42.13        42.13
</span><br>
<span class="quotelev1">&gt;           16         1000        45.76        45.77        45.77
</span><br>
<span class="quotelev1">&gt;           32         1000     19991.83     20011.84     20005.29
</span><br>
<span class="quotelev1">&gt;           64         1000     38561.52     38599.66     38587.74
</span><br>
<span class="quotelev1">&gt;          128         1000     58263.81     58305.74     58293.48
</span><br>
<span class="quotelev1">&gt;          256         1000     77382.83     77425.93     77412.49
</span><br>
<span class="quotelev1">&gt;          512         1000     95981.97     96022.70     96010.73
</span><br>
<span class="quotelev1">&gt;         1024         1000    480838.00    481214.78    481027.05
</span><br>
<span class="quotelev1">&gt;         2048         1000    480522.97    480917.02    480727.98
</span><br>
<span class="quotelev1">&gt;         4096         1000    480762.69    481134.49    480955.03
</span><br>
<span class="quotelev1">&gt;         8192         1000    481136.70    481505.36    481334.86
</span><br>
<span class="quotelev1">&gt;        16384         1000    483629.46    483889.28    483759.38
</span><br>
<span class="quotelev1">&gt;        32768         1000     23809.47     23810.27     23809.62
</span><br>
<span class="quotelev1">&gt;        65536          640      7085.58      7085.91      7085.69
</span><br>
<span class="quotelev1">&gt;       131072          320     11928.29     11929.29     11928.72
</span><br>
<span class="quotelev1">&gt;       262144          160     22174.66     22177.67     22175.94
</span><br>
<span class="quotelev1">&gt;       524288           80     42270.91     42283.90     42277.55
</span><br>
<span class="quotelev1">&gt;      1048576           40     82389.85     82461.10     82428.26
</span><br>
<span class="quotelev1">&gt;      2097152           20    161347.04    161624.54    161485.84
</span><br>
<span class="quotelev1">&gt;      4194304           10    321467.52    322562.79    322019.24
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens on various numbers of nodes and is reproducable - I have
</span><br>
<span class="quotelev1">&gt; repeated the run 5 times on 8 nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not seen such results with 1.2.x series with either OB1+BTL or
</span><br>
<span class="quotelev1">&gt; CM+MTL, timing increases rather smoothly. Trying various options with 1.3b2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca pml cm --mca mtl mx               works well
</span><br>
<span class="quotelev1">&gt; --mca pml cm --mca btl mx,sm,self       works well
</span><br>
<span class="quotelev1">&gt; --mca pml ob1 --mca btl mx,sm,self      jumps like above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From what I know, the 1.2.x series defaulted to OB1+BTL; CM was only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; possible with a MTL which internally implemented sm and self, so second test
</span><br>
<span class="quotelev1">&gt; above would have failed (please correct me if I'm wrong).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The README for 1.3b2 specifies that CM is now chosen if possible; in my
</span><br>
<span class="quotelev1">&gt; trials, when I specify CM+BTL, it doesn't complain and works well.
</span><br>
<span class="quotelev1">&gt; However either the default (no options) or OB1+BTL leads to the jumps
</span><br>
<span class="quotelev1">&gt; mentioned above, which makes me believe that OB1+BTL is still chosen as
</span><br>
<span class="quotelev1">&gt; default, contrary to what the README specifies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there are 2 issues:
</span><br>
<span class="quotelev1">&gt; - which is right, the README or the runtime behaviour that I see ?
</span><br>
<span class="quotelev1">&gt; - is it normal for the OB1+BTL to behave so poorly with MX ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any insight into this issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bogdan Costescu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
</span><br>
<span class="quotelev1">&gt; Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
</span><br>
<span class="quotelev1">&gt; E-mail: bogdan.costescu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5137.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5135.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4919.php">Bogdan Costescu: "[OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
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
