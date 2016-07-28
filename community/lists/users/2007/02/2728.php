<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 22 06:46:31 2007" -->
<!-- isoreceived="20070222114631" -->
<!-- sent="Thu, 22 Feb 2007 06:46:15 -0500" -->
<!-- isosent="20070222114615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query reg. MPI for Perl" -->
<!-- id="6BD51BA2-3A09-4547-9ED6-B84FEDAFBEE0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="59326.192.168.1.182.1172143384.squirrel_at_webmail.ibab.ac.in" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-22 06:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2729.php">Lydia Heck: "[OMPI users] MPI reduce ..."</a>
<li><strong>Previous message:</strong> <a href="2727.php">Sai Lakshmi. S: "[OMPI users] Query reg. MPI for Perl"</a>
<li><strong>In reply to:</strong> <a href="2727.php">Sai Lakshmi. S: "[OMPI users] Query reg. MPI for Perl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From personal experience, I know that &quot;_kio&quot; is a symbol from LAM/ 
<br>
MPI -- not Open MPI.  So be sure to be explicit about which MPI  
<br>
implementation you want to use.
<br>
<p>Also, I notice in Parallel::MPI::Simple that it simply tries to &quot;- 
<br>
lmpi&quot; to get all the relevant MPI infrastructure.  This will not work  
<br>
with either LAM/MPI or Open MPI.  I suggest using the &quot;mpicc&quot; wrapper  
<br>
compiler instead of cc/gcc.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perl Makefile.PL CC=mpicc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make
<br>
<p>That seemed to work for me.
<br>
<p><p>On Feb 22, 2007, at 6:23 AM, Sai Lakshmi. S wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to install Perl Parallel::MPI::Simple (or Parallel::MPI)
</span><br>
<span class="quotelev1">&gt; module in Linux. I downloaded the modules from CPAN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting the following error when i execute &quot;make test&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can't load 'blib/arch/auto/Parallel/MPI/Simple/Simple.so' for module
</span><br>
<span class="quotelev1">&gt; Parallel::MPI::Simple: blib/arch/auto/Parallel/MPI/Simple/Simple.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: _kio at
</span><br>
<span class="quotelev1">&gt; /usr/lib/perl5/5.8.5/i386-linux-thread-multi/DynaLoader.pm line 230.
</span><br>
<span class="quotelev1">&gt;  at ic.pl line 3
</span><br>
<span class="quotelev1">&gt; Compilation failed in require at ic.pl line 3.
</span><br>
<span class="quotelev1">&gt; BEGIN failed--compilation aborted at ic.pl line 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried installing the module in home directory and gave that path  
</span><br>
<span class="quotelev1">&gt; &quot;use
</span><br>
<span class="quotelev1">&gt; lib /home/path/Parallel::MPI::Simple&quot; as the first line of the perl
</span><br>
<span class="quotelev1">&gt; program. I encountered the following error for &quot;mpirun n1 perl  
</span><br>
<span class="quotelev1">&gt; test.pl&quot; :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Undefined subroutine &amp;main::MPI_Init called at test.pl line 4.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help to solve this issue would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; Sai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sai Lakshmi. S
</span><br>
<span class="quotelev1">&gt; Research Assistant
</span><br>
<span class="quotelev1">&gt; Institute of Bioinformatics and Applied Biotechnology
</span><br>
<span class="quotelev1">&gt; G-05, Tech Park Mall, ITPB,
</span><br>
<span class="quotelev1">&gt; Whitefield Road, Bangalore 560 066, India.
</span><br>
<span class="quotelev1">&gt; Tel: +91 (80) 2841-0029, 2841-2769
</span><br>
<span class="quotelev1">&gt; Fax: +91 (80) 2841-2761
</span><br>
<span class="quotelev1">&gt; www.ibab.ac.in
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2729.php">Lydia Heck: "[OMPI users] MPI reduce ..."</a>
<li><strong>Previous message:</strong> <a href="2727.php">Sai Lakshmi. S: "[OMPI users] Query reg. MPI for Perl"</a>
<li><strong>In reply to:</strong> <a href="2727.php">Sai Lakshmi. S: "[OMPI users] Query reg. MPI for Perl"</a>
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
