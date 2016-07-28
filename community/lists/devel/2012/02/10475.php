<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 08:59:47 2012" -->
<!-- isoreceived="20120217135947" -->
<!-- sent="Fri, 17 Feb 2012 08:59:41 -0500" -->
<!-- isosent="20120217135941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="62209993-43A3-4308-84F4-34F40E80B1E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ocqYG9tqGnQQKD9azox+H8EMf03T1RZ3Lo46ZfEsXqkjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 08:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10476.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2012, at 8:21 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I didn't follow this entire thread in details, but I am feeling that something is wrong here. The flag fixes your problem indeed, but I think it may break binding too. It's basically making all &quot;unavailable resources&quot; available. So the binding code may end up trying to bind processes on cores that it can't actually use.
</span><br>
<p>I'm not sure I follow here -- which binding code are you referring to; that in hwloc, or that in OMPI?
<br>
<p>Ralph and I just talked about this issue on the phone.  I think OMPI is currently determining &quot;is this process bound&quot; in an incorrect what.
<br>
<p>My understanding of what we should be doing is to compare the output bitmask from hwloc_get_cpubind() with the allowed_cpuset on the HWLOC_OBJ_MACHINE.  If where we are bound is less than the allowed cpuset, then the process is bound.
<br>
<p>Is that correct?
<br>
<p>And per Ralph's question, the allowed_cpuset of HWLOC_OBJ_MACHINE will still be accurate even if we do WHOLE_SYSTEM, right?  E.g., if some external agent creates a Linux cpuset for a process, then even if we specify WHOLE_SYSTEM, the allowed_cpuset on OBJ_MACHINE will still accurately reflect the PU's are in the Linux cpuset where this process is running.  
<br>
<p>Right?
<br>
<p><span class="quotelev2">&gt;&gt; If srun gives you the first cores of the machine, it works fine because OMPI tries to use the first cores and those are available. But did you ever try when srun gives the second socket only for instance? Or whichever part of the machine that does not contain the first cores ? I think OMPI will still try to bind on the first cores if the flag is set, but those are not available for binding.
</span><br>
<p>We'll have to check that; I hope that's not right.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; Unless I am missing something, the proper fix would be to have two instances of the topology. One with the entire machine (for people that really want to consult all physical resources), and one for the really available part of machine (mostly used for binding).
</span><br>
<p>If allowed_cpuset is still accurate with WHOLE_SYSTEM, I hope this won't be necessary (i.e., that everywhere hwloc data is used in OMPI, we obey allowed_cpuset).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10476.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
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
