<?
$subject_val = "Re: [OMPI users] pgi and gcc runtime compatability";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 11:31:38 2008" -->
<!-- isoreceived="20081208163138" -->
<!-- sent="Mon, 8 Dec 2008 11:31:33 -0500" -->
<!-- isosent="20081208163133" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi and gcc runtime compatability" -->
<!-- id="B6B10EBD-592E-4A09-A6E0-4F378F74D672_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B952C621-730C-4634-A9EE-973974CCAE2B_at_umich.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 11:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7457.php">jody: "Re: [OMPI users] mca parameter"</a>
<li><strong>In reply to:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Reply:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Black magic happens all the time. To keep it simple, we do not expect  
<br>
different compilers to be 100% compatible, so this is completely  
<br>
unsupported by the Open MPI community. Moreover, we already know some  
<br>
compilers that claim gcc compatibility, when there are always some  
<br>
[obscure] things that don't really match (hint icc and gcc).
<br>
<p>For Fortran there are even more issues. One was already hinted in a  
<br>
one of the answers (logical), but more are expected such as the  
<br>
representation of the &quot;strange&quot; type REAL16 and REAL32 (and the  
<br>
corresponding COMPLEX types). I'm sure more can be found, but these  
<br>
are enough not to support the cross-compilers stuff.
<br>
<p>Now, I'm really curious that this worked. Do you have access to the  
<br>
opal_config.h file for the pgi and gcc build ? Or to the config.log  
<br>
files ? If yes can you share it with us please.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 7, 2008, at 22:06 , Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I did something today that I was happy worked,  but I want to know  
</span><br>
<span class="quotelev1">&gt; if anyone has had problem with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At runtime. (not compiling)  would a OpenMPI built with pgi  work to  
</span><br>
<span class="quotelev1">&gt; run a code that was compiled with the same version but gcc built  
</span><br>
<span class="quotelev1">&gt; OpenMPI ?  I tested a few apps today after I accidentally did this  
</span><br>
<span class="quotelev1">&gt; and found it worked.  They were all C/C++ apps  (namd and gromacs)   
</span><br>
<span class="quotelev1">&gt; but what about fortran apps?   Should we expect problems if someone  
</span><br>
<span class="quotelev1">&gt; does this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not going to encourage this, but it is more if needed.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Previous message:</strong> <a href="7457.php">jody: "Re: [OMPI users] mca parameter"</a>
<li><strong>In reply to:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Reply:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
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
