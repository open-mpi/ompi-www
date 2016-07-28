<?
$subject_val = "Re: [OMPI users] Regarding the error while running an mpi program";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  1 20:34:06 2012" -->
<!-- isoreceived="20120402003406" -->
<!-- sent="Sun, 1 Apr 2012 17:34:01 -0700" -->
<!-- isosent="20120402003401" -->
<!-- name="anurag sharma" -->
<!-- email="anurag89sharma_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the error while running an mpi program" -->
<!-- id="CAPxWfSsEOTQ_vD24M6LoLPa3ncnTvc67axo5YE1FAFAXs9W2=Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJ_xm3BdzWRPneWQchEFBt2PXYUi0ZH3gEMP5p0rCf5x4Y=paQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the error while running an mpi program<br>
<strong>From:</strong> anurag sharma (<em>anurag89sharma_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-01 20:34:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18900.php">Rohan Deshpande: "[OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="18898.php">seshendra seshu: "Re: [OMPI users] Regarding the error while running an mpi program"</a>
<li><strong>In reply to:</strong> <a href="18898.php">seshendra seshu: "Re: [OMPI users] Regarding the error while running an mpi program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi .....
<br>
<p>export LD_LIBRARY_PATH=/usr/local/lib/:$LD_LIBRARY_PATH
<br>
/usr/local/lib/ instead of this path give the path name where your .so file
<br>
is located
<br>
<p><p>........ anurag
<br>
<p>On Sun, Apr 1, 2012 at 5:31 PM, seshendra seshu &lt;seshu199_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi george
</span><br>
<span class="quotelev1">&gt; Thank you , but i dont know how to configure the path. can you help me in
</span><br>
<span class="quotelev1">&gt; configuring the path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 2, 2012 at 2:22 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 1, 2012, at 20:18 , seshendra seshu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; This is seshendra, iam new to MPI , iam doing my thesis on MPI, iam
</span><br>
<span class="quotelev2">&gt;&gt; trying to configure openMPI in clould using UNIVA cluster in amazon cloud.
</span><br>
<span class="quotelev2">&gt;&gt; I have followed the procedure given in the FAQ of the openMPI website and
</span><br>
<span class="quotelev2">&gt;&gt; i have installed successfully on all the nodes. But when i run the an MPI
</span><br>
<span class="quotelev2">&gt;&gt; program i was getting an following error &quot;[root_at_ip-10-46-89-192 opt]#
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; a.out: error while loading shared libraries: libmpi.so.0: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; a.out: error while loading shared libraries: libmpi.so.0: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory&quot;
</span><br>
<span class="quotelev2">&gt;&gt; So kindly any one help in sloving this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanking you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  WITH REGARDS
</span><br>
<span class="quotelev2">&gt;&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Regards
Anurag Sharma
email: anurag89sharma_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18900.php">Rohan Deshpande: "[OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="18898.php">seshendra seshu: "Re: [OMPI users] Regarding the error while running an mpi program"</a>
<li><strong>In reply to:</strong> <a href="18898.php">seshendra seshu: "Re: [OMPI users] Regarding the error while running an mpi program"</a>
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
