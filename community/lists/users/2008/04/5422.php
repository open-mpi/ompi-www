<?
$subject_val = "Re: [OMPI users] Decision map for MPI collective operations";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 20 04:23:19 2008" -->
<!-- isoreceived="20080420082319" -->
<!-- sent="Sun, 20 Apr 2008 10:23:19 +0200" -->
<!-- isosent="20080420082319" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Decision map for MPI collective operations" -->
<!-- id="480AFD77.7020300_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37DF090D-0277-4677-A595-7702602C30B8_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Decision map for MPI collective operations<br>
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-20 04:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5423.php">yacob sen: "[OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>Previous message:</strong> <a href="5421.php">George Bosilca: "Re: [OMPI users] Decision map for MPI collective operations"</a>
<li><strong>In reply to:</strong> <a href="5421.php">George Bosilca: "Re: [OMPI users] Decision map for MPI collective operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, i got it.
<br>
<p>Andy
<br>
<p>George Bosilca schrieb:
<br>
<span class="quotelev1">&gt; You need access to the source in order to look at the decision maps. 
</span><br>
<span class="quotelev1">&gt; They are in ompi/mca/coll/tuned/coll_tuned_decision_fixed.c file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2008, at 3:41 AM, Andy Georgi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i want to measure the time needed for collective operations on a cluster
</span><br>
<span class="quotelev2">&gt;&gt; by using ompi 1.2.5. i read that the algorithm which is used depends on
</span><br>
<span class="quotelev2">&gt;&gt; msgsize and/or commsize and ompi constructs a decision map for the
</span><br>
<span class="quotelev2">&gt;&gt; collective on the system. now my question:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where can i find these decision map for my system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'm no sysadmin, but i hope there is a way to get this information
</span><br>
<span class="quotelev2">&gt;&gt; anyway ;-).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; andy
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dresden University of Technology
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services
</span><br>
<span class="quotelev2">&gt;&gt; and High Performance Computing (ZIH)
</span><br>
<span class="quotelev2">&gt;&gt; D-01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Phone:    (+49) 351/463-38783
</span><br>
<span class="quotelev2">&gt;&gt; Fax:      (+49) 351/463-38245
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: Andy.Georgi_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Dresden University of Technology
Center for Information Services
and High Performance Computing (ZIH)
D-01062 Dresden
Germany
Phone:    (+49) 351/463-38783
Fax:      (+49) 351/463-38245
e-mail: Andy.Georgi_at_[hidden]
WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5423.php">yacob sen: "[OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>Previous message:</strong> <a href="5421.php">George Bosilca: "Re: [OMPI users] Decision map for MPI collective operations"</a>
<li><strong>In reply to:</strong> <a href="5421.php">George Bosilca: "Re: [OMPI users] Decision map for MPI collective operations"</a>
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
