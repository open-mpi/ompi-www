<?
$subject_val = "[OMPI users] mpi parallel code to run on infinipath env.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 20 20:17:09 2008" -->
<!-- isoreceived="20080421001709" -->
<!-- sent="Sun, 20 Apr 2008 17:16:46 -0700 (PDT)" -->
<!-- isosent="20080421001646" -->
<!-- name="yacob sen" -->
<!-- email="yacob_123_at_[hidden]" -->
<!-- subject="[OMPI users] mpi parallel code to run on infinipath env." -->
<!-- id="323666.1505.qm_at_web53406.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpi parallel code to run on infinipath env.<br>
<strong>From:</strong> yacob sen (<em>yacob_123_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-20 20:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5424.php">Daniël Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>Previous message:</strong> <a href="5422.php">Andy Georgi: "Re: [OMPI users] Decision map for MPI collective operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5424.php">Daniël Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>Reply:</strong> <a href="5424.php">Daniël Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I have parallel program written on mpi. I am able to run on openmpi environment in our Linux cluster.
<br>
I found out that it is rather slow. I have heard that it could be faster if it is run on infinipath environment where
<br>
it has lower latency. 
<br>
<p>I run my program which runs perfectly on openmpi environment first by changing the environment to 
<br>
using  (infinipath/core/gcc/2.1   and   infinipath/ofed/2.1 in my case ) and submit my job as:
<br>
<p>qsub -R y -pe infinipath 8  myscript.sh 
<br>
<p>where the script &quot;myscript&quot; contains the command:
<br>
<p>mpirun -m $TMPDIR/machines -np $NSLOTS ./test
<br>
<p>where test  is the executable file that was produced by running my parallel program test.f90
<br>
as 
<br>
<p>mpif90   test.f90    -o    test
<br>
<p>After submitting my jobs with a given number of &quot;Nslots&quot;, I got the error message as
<br>
<p>/usr/local/Cluster-Apps/sge/default/spool/node103/job_scripts/4947620: line 37: mpirun: command not found
<br>
<p><p>Any comments are welcome, thankx ? Do I need to change inside  my mpi parallel code to run on infinipath environment ?
<br>
<p>Regards
<br>
Yacob
<br>
<p><p>----- Original Message ----
<br>
From: Andy Georgi &lt;Andy.Georgi_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Sunday, April 20, 2008 9:23:19 AM
<br>
Subject: Re: [OMPI users] Deci
<br>
<p>sion map for MPI collective operations
<br>
<p>Thanks a lot, i got it.
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      ____________________________________________________________________________________
Be a better friend, newshound, and 
know-it-all with Yahoo! Mobile.  Try it now.  <a href="http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ">http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5424.php">Daniël Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>Previous message:</strong> <a href="5422.php">Andy Georgi: "Re: [OMPI users] Decision map for MPI collective operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5424.php">Daniël Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>Reply:</strong> <a href="5424.php">Daniël Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
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
