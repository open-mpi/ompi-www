<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 15:44:51 2009" -->
<!-- isoreceived="20090331194451" -->
<!-- sent="Tue, 31 Mar 2009 15:48:05 -0400" -->
<!-- isosent="20090331194805" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem" -->
<!-- id="0FABEA1E-6FA3-4D23-A35B-68B295060852_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87k565ttma.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 15:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8685.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that the missing configure option might be the problem as  
<br>
well. The BLCR configure logic checks to see if you have enabled  
<br>
checkpoint/restart in Open MPI. If you haven't then it fails out of  
<br>
configure (probably should print a better error message - I'll put  
<br>
that on my todo list).
<br>
<p>The configure flag that you are looking for is:
<br>
&nbsp;&nbsp;--with-ft=cr
<br>
<p>So try the following and let me know if that fixes the problem for you:
<br>
&nbsp;&nbsp;&nbsp;./configure --with-ft=cr --with-blcr=/opt/blcr --with-blcr-libdir=/ 
<br>
opt/blcr/lib --prefix=/opt/openmpi
<br>
<p>Some of the configure options and runtime options are discussed in the  
<br>
Checkpoint/Restart in Open MPI User's Guide which you can find linked  
<br>
at the bottom of the following wiki page:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>You may also want to consider using the thread options too for  
<br>
improved C/R response:
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-threads --enable-ft-thread
<br>
<p>Best,
<br>
Josh
<br>
<p>On Mar 31, 2009, at 2:49 PM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; M C &lt;m_c_001_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- MCA component crs:blcr (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; checking for MCA component crs:blcr compile mode... dso
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-blcr value... sanity check ok (/opt/blcr)
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-blcr-libdir value... sanity check ok (/opt/blcr/lib)
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: BLCR support requested but not found.  Perhaps  
</span><br>
<span class="quotelev2">&gt;&gt; you need to specify the location of the BLCR libraries.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is strange, as both /opt/blcr and /opt/blcr/lib are sensibly  
</span><br>
<span class="quotelev2">&gt;&gt; populated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran into this recently.  You need an extra flag which I forget, but
</span><br>
<span class="quotelev1">&gt; ./configure --help will show it can take `LAM' as an argument.  It  
</span><br>
<span class="quotelev1">&gt; seems
</span><br>
<span class="quotelev1">&gt; pretty obscure and probably deserves a report I haven't had time to
</span><br>
<span class="quotelev1">&gt; make.
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
<li><strong>Next message:</strong> <a href="8685.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
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
