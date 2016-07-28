<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 07:17:05 2006" -->
<!-- isoreceived="20060209121705" -->
<!-- sent="Thu, 9 Feb 2006 14:15:58 +0200" -->
<!-- isosent="20060209121558" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  compilation problem" -->
<!-- id="20060209121558.GA5633_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7.0.0.16.2.20060208070515.02404868_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 07:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<li><strong>Previous message:</strong> <a href="0724.php">George Bosilca: "Re:  [OMPI svn] svn:open-mpi r8940"</a>
<li><strong>In reply to:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 08, 2006 at 07:08:35AM -0700, Ralph H. Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Gleb
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just checked out another copy of the trunk and cannot replicate 
</span><br>
<span class="quotelev1">&gt; this problem. Could you take out a fresh trunk and see if it works 
</span><br>
<span class="quotelev1">&gt; for you? Could be something just got out of sync on your current 
</span><br>
<span class="quotelev1">&gt; checkout (seen that happen before where svn gets files out of sync or 
</span><br>
<span class="quotelev1">&gt; can even &quot;lose&quot; them) - I suspect that is the case here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Fresh checkout works OK, thanks.
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 01:55 AM 2/8/2006, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Hello I have problem to compile latest trunk event after running
</span><br>
<span class="quotelev2">&gt; &gt;./autogen.sh.
</span><br>
<span class="quotelev2">&gt; &gt;I've got the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  gcc -DHAVE_CONFIG_H -I. -I../../../../ompi/orte/mca/ns
</span><br>
<span class="quotelev2">&gt; &gt;  -I../../../include -I../../../include -I../../../../ompi/include
</span><br>
<span class="quotelev2">&gt; &gt;  -I../../../../ompi -I../../.. -I../../../include
</span><br>
<span class="quotelev2">&gt; &gt;  -I../../../../ompi/opal -I../../../../ompi/orte -I../../../../ompi/ompi
</span><br>
<span class="quotelev2">&gt; &gt;  -O3 -DNDEBUG -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt; &gt;  base/ns_base_local_fns.lo -MD -MP -MF base/.deps/ns_base_local_fns.Tpo
</span><br>
<span class="quotelev2">&gt; &gt;  -c ../../../../ompi/orte/mca/ns/base/ns_base_local_fns.c  -fPIC -DPIC
</span><br>
<span class="quotelev2">&gt; &gt;  -o base/.libs/ns_base_local_fns.o
</span><br>
<span class="quotelev2">&gt; &gt;  make[2]: *** No rule to make target
</span><br>
<span class="quotelev2">&gt; &gt;  `base/data_type_support/ns_data_type_compare_fns.c', needed by
</span><br>
<span class="quotelev2">&gt; &gt;  `base/data_type_support/ns_data_type_compare_fns.lo'.  Stop.
</span><br>
<span class="quotelev2">&gt; &gt;  make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt;  `/export/home/glebn/OpenMPI/build/orte/mca/ns'
</span><br>
<span class="quotelev2">&gt; &gt;  make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;  make[1]: Leaving directory `/export/home/glebn/OpenMPI/build/orte'
</span><br>
<span class="quotelev2">&gt; &gt;  make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;                         Gleb.
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<li><strong>Previous message:</strong> <a href="0724.php">George Bosilca: "Re:  [OMPI svn] svn:open-mpi r8940"</a>
<li><strong>In reply to:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
<!-- nextthread="start" -->
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
