<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 05:09:34 2009" -->
<!-- isoreceived="20090401090934" -->
<!-- sent="Wed, 1 Apr 2009 10:09:29 +0100" -->
<!-- isosent="20090401090929" -->
<!-- name="M C" -->
<!-- email="m_c_001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem" -->
<!-- id="BAY142-W53B7999E2A5532D8F529DF08B0_at_phx.gbl" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="0FABEA1E-6FA3-4D23-A35B-68B295060852_at_open-mpi.org" -->
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
<strong>From:</strong> M C (<em>m_c_001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 05:09:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8699.php">Guanyinzhu: "[OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8697.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="../../2009/03/8679.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8715.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>Yep, adding that &quot;--with-ft=cr&quot; flag did the trick. Thanks.
<br>
<p>Cheers,
<br>
m
<br>
<p><span class="quotelev1">&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 31 Mar 2009 15:48:05 -0400
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that the missing configure option might be the problem as  
</span><br>
<span class="quotelev1">&gt; well. The BLCR configure logic checks to see if you have enabled  
</span><br>
<span class="quotelev1">&gt; checkpoint/restart in Open MPI. If you haven't then it fails out of  
</span><br>
<span class="quotelev1">&gt; configure (probably should print a better error message - I'll put  
</span><br>
<span class="quotelev1">&gt; that on my todo list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure flag that you are looking for is:
</span><br>
<span class="quotelev1">&gt;   --with-ft=cr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So try the following and let me know if that fixes the problem for you:
</span><br>
<span class="quotelev1">&gt;    ./configure --with-ft=cr --with-blcr=/opt/blcr --with-blcr-libdir=/ 
</span><br>
<span class="quotelev1">&gt; opt/blcr/lib --prefix=/opt/openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of the configure options and runtime options are discussed in the  
</span><br>
<span class="quotelev1">&gt; Checkpoint/Restart in Open MPI User's Guide which you can find linked  
</span><br>
<span class="quotelev1">&gt; at the bottom of the following wiki page:
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may also want to consider using the thread options too for  
</span><br>
<span class="quotelev1">&gt; improved C/R response:
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-threads --enable-ft-thread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2009, at 2:49 PM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; M C &lt;m_c_001_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- MCA component crs:blcr (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for MCA component crs:blcr compile mode... dso
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking --with-blcr value... sanity check ok (/opt/blcr)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking --with-blcr-libdir value... sanity check ok (/opt/blcr/lib)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: WARNING: BLCR support requested but not found.  Perhaps  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you need to specify the location of the BLCR libraries.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: error: Aborting.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is strange, as both /opt/blcr and /opt/blcr/lib are sensibly  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; populated:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I ran into this recently.  You need an extra flag which I forget, but
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --help will show it can take `LAM' as an argument.  It  
</span><br>
<span class="quotelev2">&gt; &gt; seems
</span><br>
<span class="quotelev2">&gt; &gt; pretty obscure and probably deserves a report I haven't had time to
</span><br>
<span class="quotelev2">&gt; &gt; make.
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
<p>_________________________________________________________________
<br>
View your Twitter and Flickr updates from one place &#150; Learn more!
<br>
<a href="http://clk.atdmt.com/UKM/go/137984870/direct/01/">http://clk.atdmt.com/UKM/go/137984870/direct/01/</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-8698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8699.php">Guanyinzhu: "[OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8697.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="../../2009/03/8679.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8715.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
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
