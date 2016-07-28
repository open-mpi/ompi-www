<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 11:30:29 2006" -->
<!-- isoreceived="20061019153029" -->
<!-- sent="Thu, 19 Oct 2006 11:30:18 -0400" -->
<!-- isosent="20061019153018" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem abut openmpi running" -->
<!-- id="8d39cca0610190830g79ed61f8ha0e34c1cac138797_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f869b68c0610190824u36bb7dfbn26d8427b1043ffe9_at_mail.gmail.com" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-19 11:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Previous message:</strong> <a href="2010.php">Durga Choudhury: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>In reply to:</strong> <a href="2010.php">Durga Choudhury: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Reply:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a number of my Linux machines, /usr/local/lib is not searched by
<br>
ldconfig, and hence, is
<br>
not going to be found by gcc.  You can fix this by adding /usr/local/lib to
<br>
/etc/ld.so.conf and
<br>
running ldconfig ( add the -v flag if you want to see the output ).
<br>
<p>-Justin.
<br>
<p>On 10/19/06, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I knew that was the answer to Calin's question, but I still would like to
</span><br>
<span class="quotelev1">&gt; understand the issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by default, the openMPI installer installs the libraries in
</span><br>
<span class="quotelev1">&gt; /usr/local/lib, which is a standard location for the C compiler to look for
</span><br>
<span class="quotelev1">&gt; libraries. So *why* do I need to explicitly specify this with
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH? For example, when I am compiling with pthread calls and
</span><br>
<span class="quotelev1">&gt; pass -lpthread to gcc, I need not specify the location of libpthread.sowith LD_LIBRARY_PATH. I had the same problem as Calin so I am curious. This
</span><br>
<span class="quotelev1">&gt; is assuming he has not redirected the installation path to some non-standard
</span><br>
<span class="quotelev1">&gt; location.
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
<span class="quotelev1">&gt; On 10/19/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Calin,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Look like you're missing a proper value for the LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt; &gt; Please read the Open MPI FAW at <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>?
</span><br>
<span class="quotelev2">&gt; &gt; category=running.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;     george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 19, 2006, at 6:41 AM, calin pal wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              i m calin from india....i m working on openmpi....i
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have installed openmpi 1.1.1-tar.gz in four machines in our college
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lab....in one system the openmpi is properly working.i have written
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;hello world&quot; program in all machines .but in one machine its
</span><br>
<span class="quotelev3">&gt; &gt; &gt; working properly.in other machine gives
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ((
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (hello:error while loading shared libraries:libmpi.so..o;cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; open shared object file:no such file or directory.)))))
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; what is the problem plz tel me......and how to solve it..please
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tell me
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; calin pal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; india
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fergusson college
</span><br>
<span class="quotelev3">&gt; &gt; &gt; msc.tech(maths and computer sc.)
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Previous message:</strong> <a href="2010.php">Durga Choudhury: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>In reply to:</strong> <a href="2010.php">Durga Choudhury: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<li><strong>Reply:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
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
