<?
$subject_val = "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 13:33:00 2011" -->
<!-- isoreceived="20110225183300" -->
<!-- sent="Sat, 26 Feb 2011 03:31:01 +0900" -->
<!-- isosent="20110225183101" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unknown overhead in &amp;quot;mpirun -am ft-enable-cr&amp;quot;" -->
<!-- id="AANLkTi=yDQbsvbvW=oxeeeKWjAuO0uTmJ8tOoepv+kfp_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTiknaMsyBuUzBcTYMXEJs2mu53nH5--J+9jD1+Rx_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-02-25 13:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15752.php">Manoj Vaghela: "[OMPI users] OpenMPI Binaries on Windows XP with MinGW"</a>
<li><strong>Previous message:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15587.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh,
<br>
<p>Did you find out the problem? I still cannot progress anything.
<br>
Hope to hear some good news from you.
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p>On Sun, Feb 13, 2011 at 3:04 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried the MCA parameter you mentioned but it did not help, the unknown
</span><br>
<span class="quotelev1">&gt; overhead still exists.
</span><br>
<span class="quotelev1">&gt; Here I attach the output of 'ompi_info', both version 1.5 and 1.5.1.
</span><br>
<span class="quotelev1">&gt; Hope you can find out the problem.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 9, 2011 at 11:08 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the logic in the configure script is turning on the FT
</span><br>
<span class="quotelev2">&gt;&gt; thread for you when you specify both '--with-ft=cr' and
</span><br>
<span class="quotelev2">&gt;&gt; '--enable-mpi-threads'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send me the output of 'ompi_info'? Can you also try the MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameter that I mentioned earlier to see if that changes the performance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I there are many non-blocking sends and receives, there might be
</span><br>
<span class="quotelev2">&gt;&gt; performance bug with the way the point-to-point wrapper is tracking request
</span><br>
<span class="quotelev2">&gt;&gt; objects. If the above MCA parameter does not help the situation, let me know
</span><br>
<span class="quotelev2">&gt;&gt; and I might be able to take a look at this next week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 9, 2011, at 1:40 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for the reply. I did not use the '--enable-ft-thread' option.
</span><br>
<span class="quotelev2">&gt;&gt; Here is my build options:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CFLAGS=-g \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./configure \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-ft=cr \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --enable-mpi-threads \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-blcr=/home/nguyen/opt/blcr \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-openib \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My application requires lots of communication in every loop, focusing on
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Isend, MPI_Irecv and MPI_Wait. Also I want to make only one checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; per application execution for my purpose, but the unknown overhead exists
</span><br>
<span class="quotelev2">&gt;&gt; even when no checkpoint was taken.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Do you have any other idea?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Wed, Feb 9, 2011 at 12:41 AM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There are a few reasons why this might be occurring. Did you build with
</span><br>
<span class="quotelev2">&gt;&gt; the '--enable-ft-thread' option?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If so, it looks like I didn't move over the thread_sleep_wait adjustment
</span><br>
<span class="quotelev2">&gt;&gt; from the trunk - the thread was being a bit too aggressive. Try adding the
</span><br>
<span class="quotelev2">&gt;&gt; following to your command line options, and see if it changes the
</span><br>
<span class="quotelev2">&gt;&gt; performance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  &quot;-mca opal_cr_thread_sleep_wait 1000&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There are other places to look as well depending on how frequently your
</span><br>
<span class="quotelev2">&gt;&gt; application communicates, how often you checkpoint, process layout, ... But
</span><br>
<span class="quotelev2">&gt;&gt; usually the aggressive nature of the thread is the main problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Let me know if that helps.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Feb 8, 2011, at 2:50 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I am using the latest version of OpenMPI (1.5.1) and BLCR (0.8.2).
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I found that when running an application,which uses MPI_Isend,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv and MPI_Wait,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; enabling C/R, i.e using &quot;-am ft-enable-cr&quot;, the application runtime is
</span><br>
<span class="quotelev2">&gt;&gt; much longer than the normal execution with mpirun (no checkpoint was taken).
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; This overhead becomes larger when the normal execution runtime is
</span><br>
<span class="quotelev2">&gt;&gt; longer.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Does anybody have any idea about this overhead, and how to eliminate
</span><br>
<span class="quotelev2">&gt;&gt; it?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Nguyen
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15752.php">Manoj Vaghela: "[OMPI users] OpenMPI Binaries on Windows XP with MinGW"</a>
<li><strong>Previous message:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15587.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
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
