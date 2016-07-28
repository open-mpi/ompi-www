<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 13:56:54 2006" -->
<!-- isoreceived="20060731175654" -->
<!-- sent="Mon, 31 Jul 2006 13:56:36 -0400" -->
<!-- isosent="20060731175636" -->
<!-- name="James McManus" -->
<!-- email="jmpmcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling MPI with pgf90" -->
<!-- id="44CE4454.1090502_at_yahoo.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04F8338E-B406-49DF-A349-FE11D55DABC6_at_ieee.org" -->
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
<strong>From:</strong> James McManus (<em>jmpmcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-31 13:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>Previous message:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! The build went went well with FC=pgf90.
<br>
<p>Michael Kluskens wrote:
<br>
<span class="quotelev1">&gt; On Jul 31, 2006, at 1:12 PM, James McManus wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to compile MPI with pgf90. I use the following configure
</span><br>
<span class="quotelev2">&gt;&gt; settings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/mpi F90=pgf90 F77=pgf77
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides the other issue about the wrong env. variable, if you have  
</span><br>
<span class="quotelev1">&gt; further trouble I'm using the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90 FCFLAGS=- 
</span><br>
<span class="quotelev1">&gt; fastsse
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;--with-gnu-ld &quot; might be important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>Previous message:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1701.php">Michael Kluskens: "Re: [OMPI users] Compiling MPI with pgf90"</a>
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
