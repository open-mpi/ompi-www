<?
$subject_val = "Re: [OMPI users] pgi and gcc runtime compatability";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 16:36:27 2008" -->
<!-- isoreceived="20081210213627" -->
<!-- sent="Wed, 10 Dec 2008 16:36:20 -0500" -->
<!-- isosent="20081210213620" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi and gcc runtime compatability" -->
<!-- id="FF61A316-7BF1-49EC-9FD9-277D1CDBD30D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8A342E0D-F7D5-46A7-B850-BB89E8992D71_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 16:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7501.php">Jeff Squyres: "[OMPI users] Open MPI interview on FLOSS Weekly"</a>
<li><strong>Previous message:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>In reply to:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, the README describes some of the Fortran issues:
<br>
<p>- Open MPI will build bindings suitable for all common forms of
<br>
&nbsp;&nbsp;&nbsp;Fortran 77 compiler symbol mangling on platforms that support it
<br>
&nbsp;&nbsp;&nbsp;(e.g., Linux).  On platforms that do not support weak symbols (e.g.,
<br>
&nbsp;&nbsp;&nbsp;OS X), Open MPI will build Fortran 77 bindings just for the compiler
<br>
&nbsp;&nbsp;&nbsp;that Open MPI was configured with.
<br>
<p>&nbsp;&nbsp;&nbsp;Hence, on platforms that support it, if you configure Open MPI with
<br>
&nbsp;&nbsp;&nbsp;a Fortran 77 compiler that uses one symbol mangling scheme, you can
<br>
&nbsp;&nbsp;&nbsp;successfully compile and link MPI Fortran 77 applications with a
<br>
&nbsp;&nbsp;&nbsp;Fortran 77 compiler that uses a different symbol mangling scheme.
<br>
<p>&nbsp;&nbsp;&nbsp;NOTE: For platforms that support the multi-Fortran-compiler bindings
<br>
&nbsp;&nbsp;&nbsp;(i.e., weak symbols are supported), due to limitations in the MPI
<br>
&nbsp;&nbsp;&nbsp;standard and in Fortran compilers, it is not possible to hide these
<br>
&nbsp;&nbsp;&nbsp;differences in all cases.  Specifically, the following two cases may
<br>
&nbsp;&nbsp;&nbsp;not be portable between different Fortran compilers:
<br>
<p>&nbsp;&nbsp;&nbsp;1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will only compare properly to Fortran applications that were
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;created with Fortran compilers that that use the same
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name-mangling scheme as the Fortran compiler that Open MPI was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configured with.
<br>
<p>&nbsp;&nbsp;&nbsp;2. Fortran compilers may have different values for the logical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.TRUE. constant.  As such, any MPI function that uses the Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL type may only get .TRUE. values back that correspond to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the the .TRUE. value of the Fortran compiler that Open MPI was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configured with.  Note that some Fortran compilers allow forcing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.TRUE. to be 1 and .FALSE. to be 0.  For example, the Portland
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Group compilers provide the &quot;-Munixlogical&quot; option, and Intel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compilers (version &gt;= 8.) provide the &quot;-fpscomp logicals&quot; option.
<br>
<p>&nbsp;&nbsp;&nbsp;You can use the ompi_info command to see the Fortran compiler that
<br>
&nbsp;&nbsp;&nbsp;Open MPI was configured with.
<br>
<p><p><p><p><p>On Dec 8, 2008, at 11:46 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Looks like the same source tree was used cleaned (distclean).  So I  
</span><br>
<span class="quotelev1">&gt; don't have config logs for gcc or pgi..   Also I can't find  
</span><br>
<span class="quotelev1">&gt; opal_confg.h  in ether the configured/built source or installed  
</span><br>
<span class="quotelev1">&gt; location,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2.8+pgi,  This library was found to run an executable built with  
</span><br>
<span class="quotelev1">&gt; 1.2.6+gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I don't have the files you requested George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 8, 2008, at 11:31 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Black magic happens all the time. To keep it simple, we do not  
</span><br>
<span class="quotelev2">&gt;&gt; expect different compilers to be 100% compatible, so this is  
</span><br>
<span class="quotelev2">&gt;&gt; completely unsupported by the Open MPI community. Moreover, we  
</span><br>
<span class="quotelev2">&gt;&gt; already know some compilers that claim gcc compatibility, when  
</span><br>
<span class="quotelev2">&gt;&gt; there are always some [obscure] things that don't really match  
</span><br>
<span class="quotelev2">&gt;&gt; (hint icc and gcc).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For Fortran there are even more issues. One was already hinted in a  
</span><br>
<span class="quotelev2">&gt;&gt; one of the answers (logical), but more are expected such as the  
</span><br>
<span class="quotelev2">&gt;&gt; representation of the &quot;strange&quot; type REAL16 and REAL32 (and the  
</span><br>
<span class="quotelev2">&gt;&gt; corresponding COMPLEX types). I'm sure more can be found, but these  
</span><br>
<span class="quotelev2">&gt;&gt; are enough not to support the cross-compilers stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, I'm really curious that this worked. Do you have access to the  
</span><br>
<span class="quotelev2">&gt;&gt; opal_config.h file for the pgi and gcc build ? Or to the config.log  
</span><br>
<span class="quotelev2">&gt;&gt; files ? If yes can you share it with us please.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 7, 2008, at 22:06 , Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did something today that I was happy worked,  but I want to know  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if anyone has had problem with it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At runtime. (not compiling)  would a OpenMPI built with pgi  work  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run a code that was compiled with the same version but gcc  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; built OpenMPI ?  I tested a few apps today after I accidentally  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did this and found it worked.  They were all C/C++ apps  (namd and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gromacs)  but what about fortran apps?   Should we expect problems  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if someone does this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not going to encourage this, but it is more if needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7501.php">Jeff Squyres: "[OMPI users] Open MPI interview on FLOSS Weekly"</a>
<li><strong>Previous message:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>In reply to:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
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
