<?
$subject_val = "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 05:22:28 2014" -->
<!-- isoreceived="20140813092228" -->
<!-- sent="Wed, 13 Aug 2014 11:22:26 +0200" -->
<!-- isosent="20140813092226" -->
<!-- name="John Donners" -->
<!-- email="john.donners_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] patch to execute command when using hwloc-bind --get" -->
<!-- id="53EB2E52.9000503_at_surfsara.nl" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="53EB25F8.80203_at_inria.fr" -->
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
<strong>From:</strong> John Donners (<em>john.donners_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 05:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4183.php">Samuel Thibault: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4184.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>On 13-08-14 10:46, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you elaborate how you would use this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intend of the current behavior is:
</span><br>
<span class="quotelev1">&gt; 1) if the target task already runs, use &quot;hwloc-bind --pid &lt;pid&gt; --get&quot;
</span><br>
<span class="quotelev1">&gt; without any command since you have pid already
</span><br>
this behaviour stays the same with the patch.
<br>
<span class="quotelev1">&gt; 2) you just want to check whether the upcoming binding works, so you
</span><br>
<span class="quotelev1">&gt; just do something like &quot;mpirun .... hwloc-bind --get&quot; or &quot;srun ...
</span><br>
<span class="quotelev1">&gt; hwloc-bind --get&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you want a mode that creates a new task and displays it binding?
</span><br>
indeed.
<br>
<span class="quotelev1">&gt; Looks similar to passing &quot;hwloc-bind --get ; newtask&quot; to srun or mpirun ?
</span><br>
the syntax would then be something like:
<br>
<p>mpirun -n 2 bash -c &quot;hwloc-bind --get ; newtask&quot;
<br>
<p>it's possible, but quite ugly.
<br>
<p>With regards,
<br>
John
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 13/08/2014 10:38, John Donners a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was somewhat surprised to notice that hwloc-bind doesn't
</span><br>
<span class="quotelev2">&gt;&gt; execute the command if the --get option is used. This could
</span><br>
<span class="quotelev2">&gt;&gt; come in handy to check the binding set by other programs,
</span><br>
<span class="quotelev2">&gt;&gt; e.g. SLURM, mpirun or taskset. The following patch would
</span><br>
<span class="quotelev2">&gt;&gt; change this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- hwloc-1.9/utils/hwloc-bind.c    2014-03-17 16:42:36.000000000 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ hwloc-1.9/utils/hwloc-bind.c.getproc    2014-08-13
</span><br>
<span class="quotelev2">&gt;&gt; 10:24:17.832682576 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -301,7 +301,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;       else
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;%s\n&quot;, s);
</span><br>
<span class="quotelev2">&gt;&gt;       free(s);
</span><br>
<span class="quotelev2">&gt;&gt; -    return EXIT_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (get_last_cpu_location) {
</span><br>
<span class="quotelev2">&gt;&gt; +      return EXIT_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     if (got_membind) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please consider this change for the next release of hwloc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With regards,
</span><br>
<span class="quotelev2">&gt;&gt; John
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | John Donners | Senior adviseur | Operations, Support &amp; Development |
</span><br>
<span class="quotelev2">&gt;&gt; SURFsara | Science Park 140 | 1098 XG Amsterdam | Nederland |
</span><br>
<span class="quotelev2">&gt;&gt; T (31)6 19039023 | john.donners_at_[hidden] | www.surfsara.nl |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aanwezig op | ma | di | wo | do | vr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4171.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4171.php</a>
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
<p><p><pre>
-- 
Probeer de SURFsara app! Beschikbaar voor iOS en Android.
| John Donners | Senior adviseur | Operations, Support &amp; Development | SURFsara | Science Park 140 | 1098 XG Amsterdam | Nederland |
T (31)6 19039023 | john.donners_at_[hidden] | www.surfsara.nl |
Aanwezig op | ma | di | wo | do | vr
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4173.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4183.php">Samuel Thibault: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4184.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
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
