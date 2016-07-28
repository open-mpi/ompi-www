<?
$subject_val = "Re: [OMPI users] pgi and gcc runtime compatability";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 11:47:42 2008" -->
<!-- isoreceived="20081208164742" -->
<!-- sent="Mon, 8 Dec 2008 11:46:45 -0500" -->
<!-- isosent="20081208164645" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi and gcc runtime compatability" -->
<!-- id="8A342E0D-F7D5-46A7-B850-BB89E8992D71_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B6B10EBD-592E-4A09-A6E0-4F378F74D672_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] pgi and gcc runtime compatability<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 11:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7461.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>In reply to:</strong> <a href="7458.php">George Bosilca: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7500.php">Jeff Squyres: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Reply:</strong> <a href="7500.php">Jeff Squyres: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like the same source tree was used cleaned (distclean).  So I  
<br>
don't have config logs for gcc or pgi..   Also I can't find  
<br>
opal_confg.h  in ether the configured/built source or installed  
<br>
location,
<br>
<p>&nbsp;&nbsp;1.2.8+pgi,  This library was found to run an executable built with  
<br>
1.2.6+gcc
<br>
<p>Sorry I don't have the files you requested George.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 8, 2008, at 11:31 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Black magic happens all the time. To keep it simple, we do not  
</span><br>
<span class="quotelev1">&gt; expect different compilers to be 100% compatible, so this is  
</span><br>
<span class="quotelev1">&gt; completely unsupported by the Open MPI community. Moreover, we  
</span><br>
<span class="quotelev1">&gt; already know some compilers that claim gcc compatibility, when  
</span><br>
<span class="quotelev1">&gt; there are always some [obscure] things that don't really match  
</span><br>
<span class="quotelev1">&gt; (hint icc and gcc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For Fortran there are even more issues. One was already hinted in a  
</span><br>
<span class="quotelev1">&gt; one of the answers (logical), but more are expected such as the  
</span><br>
<span class="quotelev1">&gt; representation of the &quot;strange&quot; type REAL16 and REAL32 (and the  
</span><br>
<span class="quotelev1">&gt; corresponding COMPLEX types). I'm sure more can be found, but these  
</span><br>
<span class="quotelev1">&gt; are enough not to support the cross-compilers stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I'm really curious that this worked. Do you have access to the  
</span><br>
<span class="quotelev1">&gt; opal_config.h file for the pgi and gcc build ? Or to the config.log  
</span><br>
<span class="quotelev1">&gt; files ? If yes can you share it with us please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2008, at 22:06 , Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did something today that I was happy worked,  but I want to know  
</span><br>
<span class="quotelev2">&gt;&gt; if anyone has had problem with it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At runtime. (not compiling)  would a OpenMPI built with pgi  work  
</span><br>
<span class="quotelev2">&gt;&gt; to run a code that was compiled with the same version but gcc  
</span><br>
<span class="quotelev2">&gt;&gt; built OpenMPI ?  I tested a few apps today after I accidentally  
</span><br>
<span class="quotelev2">&gt;&gt; did this and found it worked.  They were all C/C++ apps  (namd and  
</span><br>
<span class="quotelev2">&gt;&gt; gromacs)  but what about fortran apps?   Should we expect problems  
</span><br>
<span class="quotelev2">&gt;&gt; if someone does this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not going to encourage this, but it is more if needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7461.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>In reply to:</strong> <a href="7458.php">George Bosilca: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7500.php">Jeff Squyres: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Reply:</strong> <a href="7500.php">Jeff Squyres: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
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
