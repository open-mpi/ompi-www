<?
$subject_val = "Re: [OMPI users] openmpi-1.2.8 and cygwin...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 04:46:05 2008" -->
<!-- isoreceived="20081118094605" -->
<!-- sent="Tue, 18 Nov 2008 10:45:58 +0100" -->
<!-- isosent="20081118094558" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.2.8 and cygwin..." -->
<!-- id="49228ED6.1060900_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="893074DDAECC0C4FA9127911ED377E38E425DF_at_piggvar.himolde.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.2.8 and cygwin...<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-18 04:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7330.php">Venu Gopal: "[OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>Previous message:</strong> <a href="7328.php">Solibakke Per Bjarte: "[OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>In reply to:</strong> <a href="7328.php">Solibakke Per Bjarte: "[OMPI users] openmpi-1.2.8 and cygwin..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7382.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7382.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Solibakke,
<br>
<p>I'm not familiar with the installation under Cygwin, but what I can tell 
<br>
is that we are making a windows support public very soon. When it's 
<br>
ready, you will never need to install Open MPI under Cygwin on Windows, 
<br>
you will be able to configure with CMake and compile everything with 
<br>
Visual Studio (2005/2008/Express), or you could also install Open MPI 
<br>
with a binary installer without compiling any source code.
<br>
<p>I suggest you to use Open MPI trunk when the Windows support (with 
<br>
CMake) is ready. I'm also glad to help you with that.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>Solibakke Per Bjarte wrote:
<br>
<span class="quotelev1">&gt; I'm trying to use CYGWIN + Open-mpi 1.2.8 / open-mpi-1.3b2 
</span><br>
<span class="quotelev1">&gt; /openmpi-1.4a1r20006
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In all o+pen-mpi versions I receive the following error messege from
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; make all                              (see attached file: /log.make/)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The configure works well:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/ompi-1-2-8 
</span><br>
<span class="quotelev1">&gt; --with-mpi-param-check=runtime --with-threads=posix 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --disable-io-romio 
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=memory_mallopt,maffinity,paffinity 
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt --enable-shared
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is this a bug in open-mpi-2.8 or is there something missing from 
</span><br>
<span class="quotelev1">&gt; CYGWIN installation?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Reagards
</span><br>
<span class="quotelev1">&gt; PBSolibakke
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Associate Professor dr.oecon P.B.Solibakke
</span><br>
<span class="quotelev1">&gt; Molde University College
</span><br>
<span class="quotelev1">&gt; Phone: +4790035606 ; fax: +4794760843
</span><br>
<span class="quotelev1">&gt; E-mail: per.b.solibakke_at_[hidden] &lt;mailto:per.b.solibakke_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="7330.php">Venu Gopal: "[OMPI users] how to get openMPI working, someone help me."</a>
<li><strong>Previous message:</strong> <a href="7328.php">Solibakke Per Bjarte: "[OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>In reply to:</strong> <a href="7328.php">Solibakke Per Bjarte: "[OMPI users] openmpi-1.2.8 and cygwin..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7382.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7382.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
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
