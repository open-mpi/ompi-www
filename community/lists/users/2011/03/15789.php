<?
$subject_val = "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 10:34:34 2011" -->
<!-- isoreceived="20110303153434" -->
<!-- sent="Fri, 4 Mar 2011 00:33:37 +0900" -->
<!-- isosent="20110303153337" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unknown overhead in &amp;quot;mpirun -am ft-enable-cr&amp;quot;" -->
<!-- id="AANLkTikiecMV0oom3j1doN55yEjhhMDp8ceZeU_BxBT0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58630261-26A4-43BE-9F27-5C0BC41227CC_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-03-03 10:33:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Josh.
<br>
Actually I also tested with the Himeno
<br>
benchmark&lt;<a href="http://accc.riken.jp/assets/files/himenob_loadmodule/himenoBMT_c_mpi.lzh">http://accc.riken.jp/assets/files/himenob_loadmodule/himenoBMT_c_mpi.lzh</a>&gt;and
<br>
got the same problem, so I think this could be a bug.
<br>
Hope this information also helps.
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p>On Fri, Mar 4, 2011 at 12:04 AM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the program. I created a ticket for this performance bug and
</span><br>
<span class="quotelev1">&gt; attached the tarball to the ticket:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2743">https://svn.open-mpi.org/trac/ompi/ticket/2743</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know exactly when I will be able to get back to this, but
</span><br>
<span class="quotelev1">&gt; hopefully soon. I added you to the CC so you should receive any progress
</span><br>
<span class="quotelev1">&gt; updates regarding the ticket as we move forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2011, at 2:12 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Josh,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached with this email is a small program that illustrates the
</span><br>
<span class="quotelev1">&gt; performance problem. You can find simple instructions in the README file.
</span><br>
<span class="quotelev2">&gt; &gt; There are also 2 sample result files (cpu.256^3.8N.*) which show the
</span><br>
<span class="quotelev1">&gt; execution time difference between 2 cases.
</span><br>
<span class="quotelev2">&gt; &gt; Hope you can take some time to find the problem.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your kindness.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 2, 2011 at 3:00 AM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have not had the time to look into the performance problem yet, and
</span><br>
<span class="quotelev1">&gt; probably won't for a little while. Can you send me a small program that
</span><br>
<span class="quotelev1">&gt; illustrates the performance problem, and I'll file a bug so we don't lose
</span><br>
<span class="quotelev1">&gt; track of it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 25, 2011, at 1:31 PM, Nguyen Toan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear Josh,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Did you find out the problem? I still cannot progress anything.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hope to hear some good news from you.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sun, Feb 13, 2011 at 3:04 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried the MCA parameter you mentioned but it did not help, the
</span><br>
<span class="quotelev1">&gt; unknown overhead still exists.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here I attach the output of 'ompi_info', both version 1.5 and 1.5.1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hope you can find out the problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, Feb 9, 2011 at 11:08 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like the logic in the configure script is turning on the FT
</span><br>
<span class="quotelev1">&gt; thread for you when you specify both '--with-ft=cr' and
</span><br>
<span class="quotelev1">&gt; '--enable-mpi-threads'.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you send me the output of 'ompi_info'? Can you also try the MCA
</span><br>
<span class="quotelev1">&gt; parameter that I mentioned earlier to see if that changes the performance?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I there are many non-blocking sends and receives, there might be
</span><br>
<span class="quotelev1">&gt; performance bug with the way the point-to-point wrapper is tracking request
</span><br>
<span class="quotelev1">&gt; objects. If the above MCA parameter does not help the situation, let me know
</span><br>
<span class="quotelev1">&gt; and I might be able to take a look at this next week.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 9, 2011, at 1:40 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Josh,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks for the reply. I did not use the '--enable-ft-thread' option.
</span><br>
<span class="quotelev1">&gt; Here is my build options:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CFLAGS=-g \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ./configure \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --with-ft=cr \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --enable-mpi-threads \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --with-blcr=/home/nguyen/opt/blcr \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --with-openib \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My application requires lots of communication in every loop, focusing
</span><br>
<span class="quotelev1">&gt; on MPI_Isend, MPI_Irecv and MPI_Wait. Also I want to make only one
</span><br>
<span class="quotelev1">&gt; checkpoint per application execution for my purpose, but the unknown
</span><br>
<span class="quotelev1">&gt; overhead exists even when no checkpoint was taken.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Do you have any other idea?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Wed, Feb 9, 2011 at 12:41 AM, Joshua Hursey &lt;
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; There are a few reasons why this might be occurring. Did you build
</span><br>
<span class="quotelev1">&gt; with the '--enable-ft-thread' option?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If so, it looks like I didn't move over the thread_sleep_wait
</span><br>
<span class="quotelev1">&gt; adjustment from the trunk - the thread was being a bit too aggressive. Try
</span><br>
<span class="quotelev1">&gt; adding the following to your command line options, and see if it changes the
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  &quot;-mca opal_cr_thread_sleep_wait 1000&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; There are other places to look as well depending on how frequently
</span><br>
<span class="quotelev1">&gt; your application communicates, how often you checkpoint, process layout, ...
</span><br>
<span class="quotelev1">&gt; But usually the aggressive nature of the thread is the main problem.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Let me know if that helps.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -- Josh
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Feb 8, 2011, at 2:50 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I am using the latest version of OpenMPI (1.5.1) and BLCR (0.8.2).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I found that when running an application,which uses MPI_Isend,
</span><br>
<span class="quotelev1">&gt; MPI_Irecv and MPI_Wait,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; enabling C/R, i.e using &quot;-am ft-enable-cr&quot;, the application runtime
</span><br>
<span class="quotelev1">&gt; is much longer than the normal execution with mpirun (no checkpoint was
</span><br>
<span class="quotelev1">&gt; taken).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; This overhead becomes larger when the normal execution runtime is
</span><br>
<span class="quotelev1">&gt; longer.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Does anybody have any idea about this overhead, and how to
</span><br>
<span class="quotelev1">&gt; eliminate it?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Nguyen
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev2">&gt; &gt; &lt;test.tar&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15789/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
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
