<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 14:33:27 2007" -->
<!-- isoreceived="20070502183327" -->
<!-- sent="Wed, 2 May 2007 12:33:15 -0600" -->
<!-- isosent="20070502183315" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Call to MPI_Init affects errno" -->
<!-- id="81446F55-098B-4D06-BA6A-1B3A02500CC4_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB40462F69164849BF07D528E474B170014A48F5_at_ussemx1100.merck.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 14:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Previous message:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>In reply to:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup, it does.  There's nothing in the standard that says it isn't  
<br>
allowed to.  Given the number of system/libc calls involved in doing  
<br>
communication, pretty much every MPI function is going to change the  
<br>
value of errno.  If you expect otherwise, I'd modify your  
<br>
application.  Most cluster-based MPI implementations are going to  
<br>
randomly change the errno on you.
<br>
<p>Brian
<br>
<p>On May 2, 2007, at 12:18 PM, Chudin, Eugene wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to experiment with openmpi and following trivial code  
</span><br>
<span class="quotelev1">&gt; (although runs) affects value of errno
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cerrno&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      int _procid, _np;
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;errno=\t&quot; &lt;&lt; errno &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;      MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;errno=\t&quot; &lt;&lt; errno &lt;&lt; &quot;\tafter MPI_Init()\t&quot; &lt;&lt;  
</span><br>
<span class="quotelev1">&gt; std::endl;
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_rank (MPI_COMM_WORLD, &amp;_procid);
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_size (MPI_COMM_WORLD, &amp;_np);
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;errno msg=\t&quot; &lt;&lt; strerror(errno) &lt;&lt; &quot;\tprocessor= 
</span><br>
<span class="quotelev1">&gt; \t&quot; &lt;&lt; _procid &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiled with
</span><br>
<span class="quotelev1">&gt; mpiCC -Wall test.cpp -o test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Produces following output when run just on single processor using
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --prefix /toolbox/openmpi  ./test
</span><br>
<span class="quotelev1">&gt; errno=  0
</span><br>
<span class="quotelev1">&gt; errno=  2       after MPI_Init()
</span><br>
<span class="quotelev1">&gt; errno msg=      No such file or directory       processor=      0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When run on two processors using
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --prefix /toolbox/openmpi  ./test
</span><br>
<span class="quotelev1">&gt; errno=  0
</span><br>
<span class="quotelev1">&gt; errno=  0
</span><br>
<span class="quotelev1">&gt; errno=  11      after MPI_Init()
</span><br>
<span class="quotelev1">&gt; errno=  115     after MPI_Init()
</span><br>
<span class="quotelev1">&gt; errno msg=      Operation now in progress       processor=      0
</span><br>
<span class="quotelev1">&gt; errno msg=      Resource temporarily unavailable         
</span><br>
<span class="quotelev1">&gt; processor=      1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of ompi_info --all is attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;ompi_info.txt&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; Notice:  This e-mail message, together with any attachments, contains
</span><br>
<span class="quotelev1">&gt; information of Merck &amp; Co., Inc. (One Merck Drive, Whitehouse Station,
</span><br>
<span class="quotelev1">&gt; New Jersey, USA 08889), and/or its affiliates (which may be known
</span><br>
<span class="quotelev1">&gt; outside the United States as Merck Frosst, Merck Sharp &amp; Dohme or MSD
</span><br>
<span class="quotelev1">&gt; and in Japan, as Banyu - direct contact information for affiliates is
</span><br>
<span class="quotelev1">&gt; available at <a href="http://www.merck.com/contact/contacts.html">http://www.merck.com/contact/contacts.html</a>) that may be
</span><br>
<span class="quotelev1">&gt; confidential, proprietary copyrighted and/or legally privileged. It is
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual or entity named on this
</span><br>
<span class="quotelev1">&gt; message. If you are not the intended recipient, and have received this
</span><br>
<span class="quotelev1">&gt; message in error, please notify us immediately by reply e-mail and  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; delete it from your system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Previous message:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>In reply to:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
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
