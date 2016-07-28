<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 09:08:37 2006" -->
<!-- isoreceived="20060208140837" -->
<!-- sent="Wed, 08 Feb 2006 07:08:35 -0700" -->
<!-- isosent="20060208140835" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  compilation problem" -->
<!-- id="7.0.0.16.2.20060208070515.02404868_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060208085546.GA3671_at_minantech.com" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 09:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0719.php">Gleb Natapov: "compilation problem"</a>
<li><strong>In reply to:</strong> <a href="0719.php">Gleb Natapov: "compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
<li><strong>Reply:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb
<br>
<p>I just checked out another copy of the trunk and cannot replicate 
<br>
this problem. Could you take out a fresh trunk and see if it works 
<br>
for you? Could be something just got out of sync on your current 
<br>
checkout (seen that happen before where svn gets files out of sync or 
<br>
can even &quot;lose&quot; them) - I suspect that is the case here.
<br>
<p>Ralph
<br>
<p><p>At 01:55 AM 2/8/2006, you wrote:
<br>
<span class="quotelev1">&gt;Hello I have problem to compile latest trunk event after running
</span><br>
<span class="quotelev1">&gt;./autogen.sh.
</span><br>
<span class="quotelev1">&gt;I've got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I../../../../ompi/orte/mca/ns
</span><br>
<span class="quotelev1">&gt;  -I../../../include -I../../../include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt;  -I../../../../ompi -I../../.. -I../../../include
</span><br>
<span class="quotelev1">&gt;  -I../../../../ompi/opal -I../../../../ompi/orte -I../../../../ompi/ompi
</span><br>
<span class="quotelev1">&gt;  -O3 -DNDEBUG -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev1">&gt;  base/ns_base_local_fns.lo -MD -MP -MF base/.deps/ns_base_local_fns.Tpo
</span><br>
<span class="quotelev1">&gt;  -c ../../../../ompi/orte/mca/ns/base/ns_base_local_fns.c  -fPIC -DPIC
</span><br>
<span class="quotelev1">&gt;  -o base/.libs/ns_base_local_fns.o
</span><br>
<span class="quotelev1">&gt;  make[2]: *** No rule to make target
</span><br>
<span class="quotelev1">&gt;  `base/data_type_support/ns_data_type_compare_fns.c', needed by
</span><br>
<span class="quotelev1">&gt;  `base/data_type_support/ns_data_type_compare_fns.lo'.  Stop.
</span><br>
<span class="quotelev1">&gt;  make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;  `/export/home/glebn/OpenMPI/build/orte/mca/ns'
</span><br>
<span class="quotelev1">&gt;  make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  make[1]: Leaving directory `/export/home/glebn/OpenMPI/build/orte'
</span><br>
<span class="quotelev1">&gt;  make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;                         Gleb.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0719.php">Gleb Natapov: "compilation problem"</a>
<li><strong>In reply to:</strong> <a href="0719.php">Gleb Natapov: "compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
<li><strong>Reply:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
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
