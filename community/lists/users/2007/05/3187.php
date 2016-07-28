<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 14:39:57 2007" -->
<!-- isoreceived="20070502183957" -->
<!-- sent="Wed, 02 May 2007 20:38:54 +0200" -->
<!-- isosent="20070502183854" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Call to MPI_Init affects errno" -->
<!-- id="4638DABE.6050406_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 14:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>Previous message:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>In reply to:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I quote from the SUSv3:
<br>
<p>Many functions provide an error number in errno, which has type int and is
<br>
defined in &lt;errno.h&gt;. The value of errno shall be defined only after a
<br>
call to a function for which it is explicitly stated to be set and until
<br>
it is changed by the next function call or if the application assigns it a
<br>
value. The value of errno should only be examined when it is indicated to
<br>
be valid by a function's return value. Applications shall obtain the
<br>
definition of errno by the inclusion of &lt;errno.h&gt;. No function in this
<br>
volume of IEEE Std 1003.1-2001 shall set errno to 0. The setting of errno
<br>
after a successful call to a function is unspecified unless the
<br>
description of that function specifies that errno shall not be modified.
<br>
<p>So in my understanding errno is only valid after you called a function
<br>
that explicitly set errno in case of an *error* and only if the function
<br>
returns an error indicator. In your example you call MPI_Init() which the
<br>
manpage says nothing about errno and therefor the errno value is
<br>
unspeciefied after the call and has no meaning.
<br>
<p>Bert
<br>
<p>Chudin, Eugene wrote:
<br>
<span class="quotelev1">&gt; I am trying to experiment with openmpi and following trivial code
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
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;errno msg=\t&quot; &lt;&lt; strerror(errno) &lt;&lt; &quot;\tprocessor=\t&quot;
</span><br>
<span class="quotelev1">&gt; &lt;&lt; _procid &lt;&lt; std::endl;
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
<span class="quotelev1">&gt; errno msg=      Resource temporarily unavailable        processor=      1
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
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
<span class="quotelev1">&gt; message in error, please notify us immediately by reply e-mail and then 
</span><br>
<span class="quotelev1">&gt; delete it from your system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>Previous message:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>In reply to:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
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
