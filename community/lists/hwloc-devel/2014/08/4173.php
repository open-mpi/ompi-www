<?
$subject_val = "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 07:48:31 2014" -->
<!-- isoreceived="20140813114831" -->
<!-- sent="Wed, 13 Aug 2014 11:48:29 +0000" -->
<!-- isosent="20140813114829" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] patch to execute command when using hwloc-bind --get" -->
<!-- id="97D70797-85C9-4823-9A4A-862C99EE0787_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53EB2E52.9000503_at_surfsara.nl" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 07:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4174.php">Jeff Squyres (jsquyres): "[hwloc-devel] --enable-plugins broken"</a>
<li><strong>Previous message:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4183.php">Samuel Thibault: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about displaying a warning if --get is specified but a command to execute is also specified?
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Aug 13, 2014, at 5:22 AM, &quot;John Donners&quot; &lt;john.donners_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 13-08-14 10:46, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you elaborate how you would use this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The intend of the current behavior is:
</span><br>
<span class="quotelev2">&gt;&gt; 1) if the target task already runs, use &quot;hwloc-bind --pid &lt;pid&gt; --get&quot;
</span><br>
<span class="quotelev2">&gt;&gt; without any command since you have pid already
</span><br>
<span class="quotelev1">&gt; this behaviour stays the same with the patch.
</span><br>
<span class="quotelev2">&gt;&gt; 2) you just want to check whether the upcoming binding works, so you
</span><br>
<span class="quotelev2">&gt;&gt; just do something like &quot;mpirun .... hwloc-bind --get&quot; or &quot;srun ...
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-bind --get&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you want a mode that creates a new task and displays it binding?
</span><br>
<span class="quotelev1">&gt; indeed.
</span><br>
<span class="quotelev2">&gt;&gt; Looks similar to passing &quot;hwloc-bind --get ; newtask&quot; to srun or mpirun ?
</span><br>
<span class="quotelev1">&gt; the syntax would then be something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 bash -c &quot;hwloc-bind --get ; newtask&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it's possible, but quite ugly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With regards,
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 13/08/2014 10:38, John Donners a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was somewhat surprised to notice that hwloc-bind doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execute the command if the --get option is used. This could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; come in handy to check the binding set by other programs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g. SLURM, mpirun or taskset. The following patch would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- hwloc-1.9/utils/hwloc-bind.c    2014-03-17 16:42:36.000000000 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ hwloc-1.9/utils/hwloc-bind.c.getproc    2014-08-13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10:24:17.832682576 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -301,7 +301,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        printf(&quot;%s\n&quot;, s);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      free(s);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    return EXIT_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (get_last_cpu_location) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      return EXIT_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (got_membind) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please consider this change for the next release of hwloc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; John
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | John Donners | Senior adviseur | Operations, Support &amp; Development |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SURFsara | Science Park 140 | 1098 XG Amsterdam | Nederland |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; T (31)6 19039023 | john.donners_at_[hidden] | www.surfsara.nl |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aanwezig op | ma | di | wo | do | vr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4171.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4171.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4172.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4172.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Probeer de SURFsara app! Beschikbaar voor iOS en Android.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; | John Donners | Senior adviseur | Operations, Support &amp; Development | SURFsara | Science Park 140 | 1098 XG Amsterdam | Nederland |
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4172.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4172.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4174.php">Jeff Squyres (jsquyres): "[hwloc-devel] --enable-plugins broken"</a>
<li><strong>Previous message:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4183.php">Samuel Thibault: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
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
