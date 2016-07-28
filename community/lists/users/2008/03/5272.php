<?
$subject_val = "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 20:07:44 2008" -->
<!-- isoreceived="20080326000744" -->
<!-- sent="Tue, 25 Mar 2008 20:07:34 -0400" -->
<!-- isosent="20080326000734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings" -->
<!-- id="396A4149-1B5C-41E3-9740-DFE142CE381C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C407F2F5.AB11%edeidso_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 20:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5271.php">Samir Faci: "[OMPI users] Propregate Data Transfer"</a>
<li><strong>In reply to:</strong> <a href="5247.php">Eidson, Eric D: "[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This whole issue came up recently in the MPI Forum (the const-ness [or  
<br>
not] of the MPI C++ objects).  I am a fervent believer that all the  
<br>
predefined C++ MPI objects should be const and that any MPI function  
<br>
that allows predefined handles as an argument should be a const  
<br>
argument.
<br>
<p>This got deferred to MPI 2.2, however, meaning that there won't be  
<br>
resolution in the near future.  :-\
<br>
<p>FWIW, I have File::Set_errhandler &quot;fixed&quot; in the OMPI SVN trunk (for  
<br>
the upcoming v1.3 series) to allow MPI::FILE_NULL, in anticipation of  
<br>
the Forum agreeing to make everything sane.  :-)
<br>
<p><p>On Mar 20, 2008, at 12:54 PM, Eidson, Eric D wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.5 and earlier do not let you set the Errhandler for
</span><br>
<span class="quotelev1">&gt; MPI::FILE_NULL using the C++ bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [You would want to do so because, on error, MPI::File::Open() and
</span><br>
<span class="quotelev1">&gt; MPI::File::Delete() call the Errhandler associated with FILE_NULL.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the C++ bindings, MPI::FILE_NULL is a const object, and  
</span><br>
<span class="quotelev1">&gt; Set_errhandler
</span><br>
<span class="quotelev1">&gt; is apparently a non-const function -- so compiling fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI::Init();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI::Errhandler oldeh = MPI::FILE_NULL.Get_errhandler();
</span><br>
<span class="quotelev1">&gt;  MPI::FILE_NULL.Set_errhandler(MPI::ERRORS_THROW_EXCEPTIONS);
</span><br>
<span class="quotelev1">&gt;  MPI::FILE_NULL.Set_errhandler(oldeh);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5271.php">Samir Faci: "[OMPI users] Propregate Data Transfer"</a>
<li><strong>In reply to:</strong> <a href="5247.php">Eidson, Eric D: "[OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
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
