<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 11:40:40 2006" -->
<!-- isoreceived="20061019154040" -->
<!-- sent="Thu, 19 Oct 2006 11:39:28 -0400" -->
<!-- isosent="20061019153928" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem abut openmpi running" -->
<!-- id="26FE1C0C-F0CF-411A-9581-E9B7BC41D8B0_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8d39cca0610190830g79ed61f8ha0e34c1cac138797_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-19 11:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2013.php">Audet, Martin: "[OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Previous message:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>In reply to:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, that help me realize that there are people who type a lot  
<br>
faster than me :) Thanks Justin for your accurate answer.
<br>
The only thing here is that in this particular case is not gcc who  
<br>
does not find the library (the error does not happen at compile time)  
<br>
but the runtime linker. So /etc/ld.so.conf is definitively the problem.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 19, 2006, at 11:30 AM, Justin Bronder wrote:
<br>
<p><span class="quotelev1">&gt; On a number of my Linux machines, /usr/local/lib is not searched by  
</span><br>
<span class="quotelev1">&gt; ldconfig, and hence, is
</span><br>
<span class="quotelev1">&gt; not going to be found by gcc.  You can fix this by adding /usr/ 
</span><br>
<span class="quotelev1">&gt; local/lib to /etc/ld.so.conf and
</span><br>
<span class="quotelev1">&gt; running ldconfig ( add the -v flag if you want to see the output ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Justin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/19/06, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I knew that was the answer to Calin's question, but I still would  
</span><br>
<span class="quotelev1">&gt; like to understand the issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by default, the openMPI installer installs the libraries in /usr/ 
</span><br>
<span class="quotelev1">&gt; local/lib, which is a standard location for the C compiler to look  
</span><br>
<span class="quotelev1">&gt; for libraries. So *why* do I need to explicitly specify this with  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH? For example, when I am compiling with pthread  
</span><br>
<span class="quotelev1">&gt; calls and pass -lpthread to gcc, I need not specify the location of  
</span><br>
<span class="quotelev1">&gt; libpthread.so with LD_LIBRARY_PATH. I had the same problem as Calin  
</span><br>
<span class="quotelev1">&gt; so I am curious. This is assuming he has not redirected the  
</span><br>
<span class="quotelev1">&gt; installation path to some non-standard location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/19/06, George Bosilca &lt;bosilca_at_[hidden] &gt; wrote: Calin,
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
<span class="quotelev2">&gt; &gt; (hello:error while loading shared libraries:libmpi.so..o ;cannot
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
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
<li><strong>Next message:</strong> <a href="2013.php">Audet, Martin: "[OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Previous message:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>In reply to:</strong> <a href="2011.php">Justin Bronder: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
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
