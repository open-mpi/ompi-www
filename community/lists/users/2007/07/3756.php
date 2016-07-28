<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 07:30:01 2007" -->
<!-- isoreceived="20070725113001" -->
<!-- sent="Wed, 25 Jul 2007 07:29:47 -0400" -->
<!-- isosent="20070725112947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25" -->
<!-- id="A38E1024-29BE-480D-A221-6CCE4271D20C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A6F723.6000901_at_tu-bs.de" -->
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
<strong>Date:</strong> 2007-07-25 07:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3755.php">Dirk Clasen: "[OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>In reply to:</strong> <a href="3755.php">Dirk Clasen: "[OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Reply:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm still awaiting access to the Intel 10 compilers to try to  
<br>
reproduce this problem myself.  Sorry for the delay...
<br>
<p><p>On Jul 25, 2007, at 3:09 AM, Dirk Clasen wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having trouble to install openmpi 1.2.3 on Linux ia32 using the
</span><br>
<span class="quotelev1">&gt; Intel 10.0.025 compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was a similar thread before:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/07/3570.php">http://www.open-mpi.org/community/lists/users/2007/07/3570.php</a>
</span><br>
<span class="quotelev1">&gt; but I can't install the em64t version to solve the problem ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc and all the other tools crash at exactly the same position  
</span><br>
<span class="quotelev1">&gt; when I
</span><br>
<span class="quotelev1">&gt; start them in the debugger (gdb as well as idb):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; opal_init_util(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int ret;
</span><br>
<span class="quotelev1">&gt;    char *error = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; if( ++opal_initialized != 1 ) {
</span><br>
<span class="quotelev1">&gt;      if( opal_initialized &lt; 1 ) {
</span><br>
<span class="quotelev1">&gt;        return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    (....)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;    Dirk
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
<li><strong>Next message:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3755.php">Dirk Clasen: "[OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>In reply to:</strong> <a href="3755.php">Dirk Clasen: "[OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Reply:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
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
