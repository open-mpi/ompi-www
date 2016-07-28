<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 26 18:28:47 2006" -->
<!-- isoreceived="20060626222847" -->
<!-- sent="Mon, 26 Jun 2006 18:28:32 -0400" -->
<!-- isosent="20060626222832" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser error after v1.1 upgrade" -->
<!-- id="44A05F90.8050408_at_fluent.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2F18AC6E-C35D-4DE0-A30D-C4CEC31B0BF5_at_ieee.org" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-26 18:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>Hello.  Thanks for the response.  We do clean configures and makes under 
<br>
/tmp, and install in a completely separate area so I don't see how 
<br>
anything from 1.0.2 could be left over in the 1.1 installation.  We 
<br>
aren't installing 1.1 over 1.0.2.   1.1 is configured, built, and 
<br>
installed in a completely different area.
<br>
<p>-Patrick
<br>
<p>Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;You may have to properly uninstall OpenMPI 1.0.2 before installing  
</span><br>
<span class="quotelev1">&gt;OpenMPI 1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This was an issue in the past.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would recommend you go into your OpenMPI 1.1 directory and type  
</span><br>
<span class="quotelev1">&gt;&quot;make uninstall&quot;, then if you have it go into your OpenMPI 1.0.2  
</span><br>
<span class="quotelev1">&gt;directory and do the same.  If you don't have a directory with  
</span><br>
<span class="quotelev1">&gt;OpenMPI 1.0.2 configured already then either rebuild OpenMPI 1.0.2 or  
</span><br>
<span class="quotelev1">&gt;go into /usr/local and identify all remaining OpenMPI directories and  
</span><br>
<span class="quotelev1">&gt;components and remove them.  Basically you should find directories  
</span><br>
<span class="quotelev1">&gt;modified when you installed OpenMPI 1.1 (or when you uninstalled it)  
</span><br>
<span class="quotelev1">&gt;and you may find components dated from when you installed OpenMPI 1.0.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;	I recently upgraded to v1.1 of Open MPI and ran into a problem on my
</span><br>
<span class="quotelev2">&gt;&gt;head node that I can't seem to solve.  Upon running mpicc, mpiCC, mpic
</span><br>
<span class="quotelev2">&gt;&gt;++, and so forth, I get an error like this:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1467.php">Benjamin Landsteiner: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
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
