<?
$subject_val = "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 04:46:49 2014" -->
<!-- isoreceived="20140813084649" -->
<!-- sent="Wed, 13 Aug 2014 10:46:48 +0200" -->
<!-- isosent="20140813084648" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] patch to execute command when using hwloc-bind --get" -->
<!-- id="53EB25F8.80203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53EB241D.7000109_at_surfsara.nl" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] patch to execute command when using hwloc-bind --get<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 04:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4170.php">John Donners: "[hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4170.php">John Donners: "[hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Can you elaborate how you would use this?
<br>
<p>The intend of the current behavior is:
<br>
1) if the target task already runs, use &quot;hwloc-bind --pid &lt;pid&gt; --get&quot;
<br>
without any command since you have pid already
<br>
2) you just want to check whether the upcoming binding works, so you
<br>
just do something like &quot;mpirun .... hwloc-bind --get&quot; or &quot;srun ...
<br>
hwloc-bind --get&quot;
<br>
<p>Do you want a mode that creates a new task and displays it binding?
<br>
Looks similar to passing &quot;hwloc-bind --get ; newtask&quot; to srun or mpirun ?
<br>
<p>Brice
<br>
<p><p><p>Le 13/08/2014 10:38, John Donners a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was somewhat surprised to notice that hwloc-bind doesn't
</span><br>
<span class="quotelev1">&gt; execute the command if the --get option is used. This could
</span><br>
<span class="quotelev1">&gt; come in handy to check the binding set by other programs,
</span><br>
<span class="quotelev1">&gt; e.g. SLURM, mpirun or taskset. The following patch would
</span><br>
<span class="quotelev1">&gt; change this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- hwloc-1.9/utils/hwloc-bind.c    2014-03-17 16:42:36.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ hwloc-1.9/utils/hwloc-bind.c.getproc    2014-08-13
</span><br>
<span class="quotelev1">&gt; 10:24:17.832682576 +0200
</span><br>
<span class="quotelev1">&gt; @@ -301,7 +301,9 @@
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;        printf(&quot;%s\n&quot;, s);
</span><br>
<span class="quotelev1">&gt;      free(s);
</span><br>
<span class="quotelev1">&gt; -    return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    if (get_last_cpu_location) {
</span><br>
<span class="quotelev1">&gt; +      return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    if (got_membind) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please consider this change for the next release of hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With regards,
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | John Donners | Senior adviseur | Operations, Support &amp; Development |
</span><br>
<span class="quotelev1">&gt; SURFsara | Science Park 140 | 1098 XG Amsterdam | Nederland |
</span><br>
<span class="quotelev1">&gt; T (31)6 19039023 | john.donners_at_[hidden] | www.surfsara.nl |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aanwezig op | ma | di | wo | do | vr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4171.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4171.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4170.php">John Donners: "[hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4170.php">John Donners: "[hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
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
