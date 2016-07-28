<?
$subject_val = "Re: [OMPI users] using MPI through Qt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 11:05:26 2011" -->
<!-- isoreceived="20110301160526" -->
<!-- sent="Tue, 1 Mar 2011 08:05:01 -0800" -->
<!-- isosent="20110301160501" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using MPI through Qt" -->
<!-- id="AANLkTinvuqyji1ZGo3202-W2D7MaD-gav38njJvt2PqM_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimp9XLthm8CRrKLNiZjkOB-ZJQ6mH80rn_G6FYA_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 11:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15762.php">Blosch, Edwin L: "[OMPI users] Basic question on portability"</a>
<li><strong>Previous message:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15758.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15772.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Reply:</strong> <a href="15772.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Certainly you may call MPI functions many times, the problem is that you
<br>
need to have matching receives (or collectives) at your slave nodes, which
<br>
is only determined at run-time.  Perhaps this could be done with two
<br>
communications, the first broadcast the type of communications to the slaves
<br>
(for example, 1 for collective broadcast, 2 for scatter, etc.), you encode
<br>
whatever you wish in an integer.  Once the slaves receive the code they'll
<br>
respond correspondingly, posting the corresponding MPI receive.  Clearly, a
<br>
way to allow the slaves to exit the while loop is needed if you want the
<br>
slaves to exit cleanly, the exit code can also be encoded in the integer you
<br>
sent out.
<br>
<p>On Tue, Mar 1, 2011 at 12:39 AM, Eye RCS 51 &lt;eye.rcs.51_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In an effort to make a Qt gui using MPI, I have the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Gui started in master node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. In Gui, through a pushbutton, a global variable x is assigned some
</span><br>
<span class="quotelev1">&gt; value; let say, x=1000;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I want this value to be know to all nodes. So I used broadcast in the
</span><br>
<span class="quotelev1">&gt; function assigning it on the master node and all other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. I printed values of x, which prints all 1000 in all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Now control has reached to MPI_Finalize in all nodes except master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now If I want to reassign value of x using pushbutton in master node and
</span><br>
<span class="quotelev1">&gt; again broadcast to and print in all nodes, can it be done??
</span><br>
<span class="quotelev1">&gt; I mean, can I have an MPI function which through GUI is called many times
</span><br>
<span class="quotelev1">&gt; and assigns and prints WHILE program is running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OR simply can I have a print function which is printing noderank value in
</span><br>
<span class="quotelev1">&gt; all nodes whenever pushbutton is pressed while program is running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; command i used is &quot;mpirun -np 3 ./a.out&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will be appreciated.
</span><br>
<span class="quotelev1">&gt; Thanks you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; eye51
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
David Zhang
University of California, San Diego
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-15761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15762.php">Blosch, Edwin L: "[OMPI users] Basic question on portability"</a>
<li><strong>Previous message:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15758.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15772.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Reply:</strong> <a href="15772.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
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
