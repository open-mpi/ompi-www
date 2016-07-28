<?
$subject_val = "Re: [OMPI users] Questions regarding xpmem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 11:23:18 2015" -->
<!-- isoreceived="20150325152318" -->
<!-- sent="Wed, 25 Mar 2015 16:23:05 +0100" -->
<!-- isosent="20150325152305" -->
<!-- name="Tobias Kloeffel" -->
<!-- email="tobias.kloeffel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions regarding xpmem" -->
<!-- id="5512D2D9.6040009_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150317231403.GM14275_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions regarding xpmem<br>
<strong>From:</strong> Tobias Kloeffel (<em>tobias.kloeffel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 11:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26510.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26508.php">Howard Pritchard: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>thank you for the update, it works without problems so far (kernels: 
<br>
3.19.2, 3.18.9, 3.11(openSUSE 13.1) )
<br>
Kernel 3.4 (openSUSE 12.2) needs some changes:
<br>
<p>xpmem_attach.c:
<br>
VM_DONTDUMP -&gt; VM_RESERVED
<br>
<p>xpmem_pfn.c:
<br>
+#include &lt;linux/module.h&gt;
<br>
xpmem_misc.c:
<br>
+#include &lt;linux/module.h&gt;
<br>
<p>Regards,
<br>
Tobias
<br>
<p>On 03/18/2015 12:14 AM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; It appears Cray solved the issue awhile ago. I reimported from the
</span><br>
<span class="quotelev1">&gt; lastest version I have from Cray and applied my re-applied my
</span><br>
<span class="quotelev1">&gt; patches. The new version has been pushed up to github. It appears to be
</span><br>
<span class="quotelev1">&gt; stable enough for testing but there may be outstanding bugs. I will
</span><br>
<span class="quotelev1">&gt; spend some time over the next couple of weeks testing the updated code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 17, 2015 at 12:02:43PM +0100, Tobias Kloeffel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello Nathan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am using:
</span><br>
<span class="quotelev2">&gt;&gt;     IMB 4.0 Update 2
</span><br>
<span class="quotelev2">&gt;&gt;     gcc version 4.8.1
</span><br>
<span class="quotelev2">&gt;&gt;     Intel compilers 15.0.1 20141023
</span><br>
<span class="quotelev2">&gt;&gt;     xpmem from your github
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I also tested pwscf (QuatumEespresso), here I can observe the same
</span><br>
<span class="quotelev2">&gt;&gt;     behavior. The entire calculation runs without problems, but a few mpi
</span><br>
<span class="quotelev2">&gt;&gt;     procs just stay alive and refuse to die, even with signal 9.
</span><br>
<span class="quotelev2">&gt;&gt;     openmpi and pw was build with the intel compilers, xpmem with gcc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Tobias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 03/16/2015 05:56 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   What program are you using for the benchmark? Are you using the xpmem
</span><br>
<span class="quotelev2">&gt;&gt;   branch in my github? For my testing I used a stock ubuntu 3.13 kernel
</span><br>
<span class="quotelev2">&gt;&gt;   but I have not full stress-tested my xpmem branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I will see if I can reproduce and fix the hang.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   On Mon, Mar 16, 2015 at 05:32:26PM +0100, Tobias Kloeffel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   currently I am benchmarking the different single copy mechanisms
</span><br>
<span class="quotelev2">&gt;&gt;   knem/cma/xpmem on a Xeon E5 V3 machine.
</span><br>
<span class="quotelev2">&gt;&gt;   I am using openmpi 1.8.4 with the CMA patch for vader.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   While it turns out that xpmem is the clear winner (reproducing Nathan
</span><br>
<span class="quotelev2">&gt;&gt;   Hjelm's results) I always ran into a problem at the mpi finalizing step. At
</span><br>
<span class="quotelev2">&gt;&gt;   this step, at least one process hangs, and can't be killed anymore. To get
</span><br>
<span class="quotelev2">&gt;&gt;   rid of the hanging process, the server has to be rebooted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   The applications finish successfully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Unfortunately, I can't find any further development of the xpmem module. Is
</span><br>
<span class="quotelev2">&gt;&gt;   this bug known to anyone? What kernel versions do you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Tested kernel versions:
</span><br>
<span class="quotelev2">&gt;&gt;   3.11.25-desktop (openSUSE)
</span><br>
<span class="quotelev2">&gt;&gt;   3.18.9 (vanilla)
</span><br>
<span class="quotelev2">&gt;&gt;   3.19.1 (vanilla)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   --
</span><br>
<span class="quotelev2">&gt;&gt;   M.Sc. Tobias Klo:ffel
</span><br>
<span class="quotelev2">&gt;&gt;   =======================================================
</span><br>
<span class="quotelev2">&gt;&gt;   Interdisciplinary Center for Molecular Materials (ICMM)
</span><br>
<span class="quotelev2">&gt;&gt;   and Computer-Chemistry-Center (CCC)
</span><br>
<span class="quotelev2">&gt;&gt;   Department Chemie und Pharmazie
</span><br>
<span class="quotelev2">&gt;&gt;   Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev2">&gt;&gt;   Na:gelsbachstr. 25
</span><br>
<span class="quotelev2">&gt;&gt;   D-91052 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Room: 2.307
</span><br>
<span class="quotelev2">&gt;&gt;   Phone: +49 (0) 9131 / 85 - 20421
</span><br>
<span class="quotelev2">&gt;&gt;   Fax: +49 (0) 9131 / 85 - 26565
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   =======================================================
</span><br>
<span class="quotelev2">&gt;&gt;   Department of Materials Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt;   Institute I: General Materials Properties
</span><br>
<span class="quotelev2">&gt;&gt;   Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev2">&gt;&gt;   Martensstr. 5, D-91058 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt;&gt;   Office 3.40
</span><br>
<span class="quotelev2">&gt;&gt;   Phone: (+49) 9131 85 27 -486
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   E-mail: tobias.kloeffel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;   users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;   users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;   Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26479.php">http://www.open-mpi.org/community/lists/users/2015/03/26479.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;   users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;   users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;   Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26480.php">http://www.open-mpi.org/community/lists/users/2015/03/26480.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   --
</span><br>
<span class="quotelev2">&gt;&gt;   M.Sc. Tobias Klo:ffel
</span><br>
<span class="quotelev2">&gt;&gt;   =======================================================
</span><br>
<span class="quotelev2">&gt;&gt;   Interdisciplinary Center for Molecular Materials (ICMM)
</span><br>
<span class="quotelev2">&gt;&gt;   and Computer-Chemistry-Center (CCC)
</span><br>
<span class="quotelev2">&gt;&gt;   Department Chemie und Pharmazie
</span><br>
<span class="quotelev2">&gt;&gt;   Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev2">&gt;&gt;   Na:gelsbachstr. 25
</span><br>
<span class="quotelev2">&gt;&gt;   D-91052 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Room: 2.307
</span><br>
<span class="quotelev2">&gt;&gt;   Phone: +49 (0) 9131 / 85 - 20421
</span><br>
<span class="quotelev2">&gt;&gt;   Fax: +49 (0) 9131 / 85 - 26565
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   =======================================================
</span><br>
<span class="quotelev2">&gt;&gt;   Department of Materials Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt;   Institute I: General Materials Properties
</span><br>
<span class="quotelev2">&gt;&gt;   Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   Martensstr. 5, D-91058 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt;&gt;   Office 3.40
</span><br>
<span class="quotelev2">&gt;&gt;   Phone: (+49) 9131 85 27 -486
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   E-mail: tobias.kloeffel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26483.php">http://www.open-mpi.org/community/lists/users/2015/03/26483.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26490.php">http://www.open-mpi.org/community/lists/users/2015/03/26490.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26510.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26508.php">Howard Pritchard: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
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
