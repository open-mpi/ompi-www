<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 07:21:17 2007" -->
<!-- isoreceived="20070925112117" -->
<!-- sent="Tue, 25 Sep 2007 07:20:47 -0400" -->
<!-- isosent="20070925112047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype" -->
<!-- id="358D7010-8C85-438D-A5F4-78FD86863560_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1190669261.6184.20.camel_at_lankhmar" -->
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
<strong>Date:</strong> 2007-09-25 07:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4057.php">Rayne: "[OMPI users] readv failed with errno=104"</a>
<li><strong>In reply to:</strong> <a href="4054.php">Yvan Fournier: "[OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report, Yvan.  I've filed <a href="https://svn.open-mpi.org/">https://svn.open-mpi.org/</a> 
<br>
trac/ompi/ticket/1149 about it.
<br>
<p>George (the datatypes guy) is off on vacation this week and will be  
<br>
at Euro PVM/MPI next week.  Hopefully he'll be able to look at this  
<br>
soon.
<br>
<p><p>On Sep 24, 2007, at 5:27 PM, Yvan Fournier wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seem to have encountered a new bug in Open MPI 1.2.3 using indexed
</span><br>
<span class="quotelev1">&gt; datatypes with MPI_Recv (which seems to be of the &quot;off by one&quot; sort).
</span><br>
<span class="quotelev1">&gt; I have (different from the bug I submitted in 2006 and which was
</span><br>
<span class="quotelev1">&gt; corrected since).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This bug leads to a segfault, and I have only encountered it one
</span><br>
<span class="quotelev1">&gt; one data set (on a relatively large set for a 2-processor run).
</span><br>
<span class="quotelev1">&gt; I have reproduced the segfault on 2 different linux Systems
</span><br>
<span class="quotelev1">&gt; (Debian Sarge on dual-processor Intel Xeon, Kubuntu 7.04
</span><br>
<span class="quotelev1">&gt; on single-processor Centrino system).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A means to reproduce it on 2 ranks can be found at :
</span><br>
<span class="quotelev1">&gt; <a href="http://yvan.fournier.free.fr/OpenMPI/ompi_datatype_bug_2.tar.gz">http://yvan.fournier.free.fr/OpenMPI/ompi_datatype_bug_2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (the program is very simple, but the displacements array required to
</span><br>
<span class="quotelev1">&gt; reproduce it is too large for the mailing list).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program does not print any output, but does not segfault when
</span><br>
<span class="quotelev1">&gt; functioning properly, or when USE_INDEXED_DATATYPE is unset (lines
</span><br>
<span class="quotelev1">&gt; 57-58). It works with LAM 7.1.1 and MPICH2, but fails under Open MPI.
</span><br>
<span class="quotelev1">&gt; This is a (much) simplified extract from a part of Code_Saturne's
</span><br>
<span class="quotelev1">&gt; FVM library (<a href="http://rd.edf.com/code_saturne/">http://rd.edf.com/code_saturne/</a>), which otherwise works
</span><br>
<span class="quotelev1">&gt; fine on most data using Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Yvan Fournier
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4057.php">Rayne: "[OMPI users] readv failed with errno=104"</a>
<li><strong>In reply to:</strong> <a href="4054.php">Yvan Fournier: "[OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
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
