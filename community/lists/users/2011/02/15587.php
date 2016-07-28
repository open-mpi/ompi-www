<?
$subject_val = "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 13 01:04:52 2011" -->
<!-- isoreceived="20110213060452" -->
<!-- sent="Sun, 13 Feb 2011 15:04:45 +0900" -->
<!-- isosent="20110213060445" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unknown overhead in &amp;quot;mpirun -am ft-enable-cr&amp;quot;" -->
<!-- id="AANLkTiknaMsyBuUzBcTYMXEJs2mu53nH5--J+9jD1+Rx_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E45F6438-5841-4F21-8976-FD09971E98C1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-13 01:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15588.php">lagoun brahim: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="15586.php">Gustavo Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15751.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="15751.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>I tried the MCA parameter you mentioned but it did not help, the unknown
<br>
overhead still exists.
<br>
Here I attach the output of 'ompi_info', both version 1.5 and 1.5.1.
<br>
Hope you can find out the problem.
<br>
Thank you.
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p>On Wed, Feb 9, 2011 at 11:08 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; It looks like the logic in the configure script is turning on the FT thread
</span><br>
<span class="quotelev1">&gt; for you when you specify both '--with-ft=cr' and '--enable-mpi-threads'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send me the output of 'ompi_info'? Can you also try the MCA
</span><br>
<span class="quotelev1">&gt; parameter that I mentioned earlier to see if that changes the performance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I there are many non-blocking sends and receives, there might be
</span><br>
<span class="quotelev1">&gt; performance bug with the way the point-to-point wrapper is tracking request
</span><br>
<span class="quotelev1">&gt; objects. If the above MCA parameter does not help the situation, let me know
</span><br>
<span class="quotelev1">&gt; and I might be able to take a look at this next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2011, at 1:40 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reply. I did not use the '--enable-ft-thread' option. Here
</span><br>
<span class="quotelev1">&gt; is my build options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CFLAGS=-g \
</span><br>
<span class="quotelev2">&gt; &gt; ./configure \
</span><br>
<span class="quotelev2">&gt; &gt; --with-ft=cr \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt; &gt; --with-blcr=/home/nguyen/opt/blcr \
</span><br>
<span class="quotelev2">&gt; &gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev2">&gt; &gt; --with-openib \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My application requires lots of communication in every loop, focusing on
</span><br>
<span class="quotelev1">&gt; MPI_Isend, MPI_Irecv and MPI_Wait. Also I want to make only one checkpoint
</span><br>
<span class="quotelev1">&gt; per application execution for my purpose, but the unknown overhead exists
</span><br>
<span class="quotelev1">&gt; even when no checkpoint was taken.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any other idea?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 9, 2011 at 12:41 AM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; There are a few reasons why this might be occurring. Did you build with
</span><br>
<span class="quotelev1">&gt; the '--enable-ft-thread' option?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If so, it looks like I didn't move over the thread_sleep_wait adjustment
</span><br>
<span class="quotelev1">&gt; from the trunk - the thread was being a bit too aggressive. Try adding the
</span><br>
<span class="quotelev1">&gt; following to your command line options, and see if it changes the
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;-mca opal_cr_thread_sleep_wait 1000&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are other places to look as well depending on how frequently your
</span><br>
<span class="quotelev1">&gt; application communicates, how often you checkpoint, process layout, ... But
</span><br>
<span class="quotelev1">&gt; usually the aggressive nature of the thread is the main problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if that helps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 8, 2011, at 2:50 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using the latest version of OpenMPI (1.5.1) and BLCR (0.8.2).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I found that when running an application,which uses MPI_Isend,
</span><br>
<span class="quotelev1">&gt; MPI_Irecv and MPI_Wait,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; enabling C/R, i.e using &quot;-am ft-enable-cr&quot;, the application runtime is
</span><br>
<span class="quotelev1">&gt; much longer than the normal execution with mpirun (no checkpoint was taken).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This overhead becomes larger when the normal execution runtime is
</span><br>
<span class="quotelev1">&gt; longer.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Does anybody have any idea about this overhead, and how to eliminate
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nguyen
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15587/ompi_info.1.5">ompi_info.1.5</a>
</ul>
<!-- attachment="ompi_info.1.5" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15587/ompi_info.1.5.1">ompi_info.1.5.1</a>
</ul>
<!-- attachment="ompi_info.1.5.1" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15588.php">lagoun brahim: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="15586.php">Gustavo Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15535.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15751.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="15751.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
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
