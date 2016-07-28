<?
$subject_val = "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 12:24:01 2010" -->
<!-- isoreceived="20100520162401" -->
<!-- sent="Thu, 20 May 2010 18:23:55 +0200" -->
<!-- isosent="20100520162355" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines" -->
<!-- id="AANLkTimaIvDEA16nO3O5cWoRq7iRIf0tt9xpgVAWQKyN_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimJeEQMFA1-8If8hfoRvtX-fgXNgbseHEvlYvj8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 12:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13101.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have done the test with v1.4.2 and indeed it fixes the problem.
<br>
Thanks Nysal.
<br>
Thank you also Terry for your help. With the fix I do not need anymore to
<br>
use a huge value of btl_tcp_eager_limit (I keep the default value) which
<br>
considerably decreases the memory consumption I had before. Everything works
<br>
fine now.
<br>
<p>Regards,
<br>
<p>Olivier
<br>
<p>2010/5/20 Olivier Riff &lt;oliriff_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/5/20 Nysal Jan &lt;jnysal_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This probably got fixed in <a href="https://svn.open-mpi.org/trac/ompi/ticket/2386">https://svn.open-mpi.org/trac/ompi/ticket/2386</a>
</span><br>
<span class="quotelev2">&gt;&gt; Can you try 1.4.2, the fix should be in there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will test it soon (takes some time to install the new version on each
</span><br>
<span class="quotelev1">&gt; node) . It would be perfect if it fixes it.
</span><br>
<span class="quotelev1">&gt; I will tell you the result asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; --Nysal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, May 20, 2010 at 2:02 PM, Olivier Riff &lt;oliriff_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume this question has been already discussed many times, but I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not find on Internet a solution to my problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is about buffer size limit of MPI_Send and MPI_Recv with heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system (32 bit laptop / 64 bit cluster).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My configuration is :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open mpi 1.4, configured with: --without-openib --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program is launched a laptop (32 bit Mandriva 2008) which distributes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tasks to do to a cluster of 70 processors  (64 bit RedHat Entreprise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to send various buffer size from few bytes till 30Mo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested following commands:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) mpirun -v -machinefile machinefile.txt MyMPIProgram
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt; crash on client side ( 64 bit RedHat Entreprise ) when sent buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size &gt; 65536.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) mpirun --mca btl_tcp_eager_limit 30000000 -v -machinefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machinefile.txt MyMPIProgram
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt; works but has the effect of generating gigantic memory consumption on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32 bit machine side after MPI_Recv. Memory consumption goes from 800Mo to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2,1Go after receiving about 20ko from each 70 clients ( a total of about 1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mo ).  This makes my program crash later because I have no more memory to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocate new structures. I read in a openmpi forum thread that setting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_eager_limit to a huge value explains this huge memory consumption
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when a message sent does not have a preposted ready recv. Also after all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages have been received and there is no more traffic activity : the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory consumed remains at 2.1go... and I do not understand why.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the best way to do in order to have a working program which also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has a small memory consumption (the speed performance can be lower) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to play with mca paramters btl_tcp_sndbuf and mca btl_tcp_rcvbuf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but without success.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for you help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Olivier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13101.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
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
