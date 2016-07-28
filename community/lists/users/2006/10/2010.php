<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 11:24:56 2006" -->
<!-- isoreceived="20061019152456" -->
<!-- sent="Thu, 19 Oct 2006 11:24:46 -0400" -->
<!-- isosent="20061019152446" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem abut openmpi running" -->
<!-- id="f869b68c0610190824u36bb7dfbn26d8427b1043ffe9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="65D09726-2E77-4561-93C7-D39609CA4A72_at_cs.utk.edu" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-19 11:24:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Previous message:</strong> <a href="2009.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>In reply to:</strong> <a href="2009.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Reply:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George
<br>
<p>I knew that was the answer to Calin's question, but I still would like to
<br>
understand the issue:
<br>
<p>by default, the openMPI installer installs the libraries in /usr/local/lib,
<br>
which is a standard location for the C compiler to look for libraries. So
<br>
*why* do I need to explicitly specify this with LD_LIBRARY_PATH? For
<br>
example, when I am compiling with pthread calls and pass -lpthread to gcc, I
<br>
need not specify the location of libpthread.so with LD_LIBRARY_PATH. I had
<br>
the same problem as Calin so I am curious. This is assuming he has not
<br>
redirected the installation path to some non-standard location.
<br>
<p>Thanks
<br>
Durga
<br>
<p><p>On 10/19/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Calin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look like you're missing a proper value for the LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; Please read the Open MPI FAW at <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>?
</span><br>
<span class="quotelev1">&gt; category=running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 19, 2006, at 6:41 AM, calin pal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   hi,
</span><br>
<span class="quotelev2">&gt; &gt;              i m calin from india....i m working on openmpi....i
</span><br>
<span class="quotelev2">&gt; &gt; have installed openmpi 1.1.1-tar.gz in four machines in our college
</span><br>
<span class="quotelev2">&gt; &gt; lab....in one system the openmpi is properly working.i have written
</span><br>
<span class="quotelev2">&gt; &gt; &quot;hello world&quot; program in all machines .but in one machine its
</span><br>
<span class="quotelev2">&gt; &gt; working properly.in other machine gives
</span><br>
<span class="quotelev2">&gt; &gt; ((
</span><br>
<span class="quotelev2">&gt; &gt; (hello:error while loading shared libraries:libmpi.so..o;cannot
</span><br>
<span class="quotelev2">&gt; &gt; open shared object file:no such file or directory.)))))
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; what is the problem plz tel me......and how to solve it..please
</span><br>
<span class="quotelev2">&gt; &gt; tell me
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; calin pal
</span><br>
<span class="quotelev2">&gt; &gt; india
</span><br>
<span class="quotelev2">&gt; &gt; fergusson college
</span><br>
<span class="quotelev2">&gt; &gt; msc.tech(maths and computer sc.)
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
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Previous message:</strong> <a href="2009.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>In reply to:</strong> <a href="2009.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Reply:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
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
