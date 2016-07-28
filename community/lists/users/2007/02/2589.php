<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 13:52:18 2007" -->
<!-- isoreceived="20070202185218" -->
<!-- sent="Fri, 2 Feb 2007 13:52:06 -0500" -->
<!-- isosent="20070202185206" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90" -->
<!-- id="A89A26DE-FEB4-451B-80D2-C64BEBAE9621_at_cs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20070202101650.15533.qmail_at_web7602.mail.in.yahoo.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 13:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2590.php">Steven A. DuChene: "[OMPI users] Application porting guide or hints?"</a>
<li><strong>Previous message:</strong> <a href="2588.php">Heywood, Todd: "[OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2586.php">Vadivelan Ranjith: "[OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wrong mailing list. This is for Open MPI related questions, all MPICH  
<br>
&amp; MVAPICH should be redirected toward their respective mailing-lists.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
On Feb 2, 2007, at 5:16 AM, Vadivelan Ranjith wrote:
<br>
<p><span class="quotelev1">&gt; Hi All
</span><br>
<span class="quotelev1">&gt; I used mpich2-1.0.3 to compile our code. Our code compiled fine.  
</span><br>
<span class="quotelev1">&gt; But when I try to test our code in intel mpi, It gave the following  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: gfortran compiler is not in PATH for driver: mpif90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my .bashrc having following path
</span><br>
<span class="quotelev1">&gt; source /opt/intel/fc/9.1.037/bin/ifortvars.sh
</span><br>
<span class="quotelev1">&gt; source /opt/intel/mpi/3.0/bin32/mpivars.sh
</span><br>
<span class="quotelev1">&gt; export PATH=/opt/intel/mpi/3.0/bin32:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then i changed the path to
</span><br>
<span class="quotelev1">&gt; #export PATH=/opt/ofed1.1/mpi/intel/mvapich-0.9.7-mlx2.20/bin:$PATH
</span><br>
<span class="quotelev1">&gt; #export LD_LIBRARY_PATH=/opt/ofed1.1/mpi/intel/mpvapich-0.9.7- 
</span><br>
<span class="quotelev1">&gt; mlx2.20/lib/shared:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now i got different error while compiling our code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ld: skipping incompatible ///opt/ofed1.1/mpi/intel/mvapich-0.9.7- 
</span><br>
<span class="quotelev1">&gt; mlx2.2.0/lib/libmpichf90.a when searching for -lmpichf90
</span><br>
<span class="quotelev1">&gt; ld: cannot find -lmpichf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I dont know what is the error mean. Our code is working fine with  
</span><br>
<span class="quotelev1">&gt; opensource mpich.
</span><br>
<span class="quotelev1">&gt; Can anyone please help me to compile our code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Advance Thanks
</span><br>
<span class="quotelev1">&gt; Velan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s a new way to find what you're looking for - Yahoo! Answers
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
<li><strong>Next message:</strong> <a href="2590.php">Steven A. DuChene: "[OMPI users] Application porting guide or hints?"</a>
<li><strong>Previous message:</strong> <a href="2588.php">Heywood, Todd: "[OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2586.php">Vadivelan Ranjith: "[OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
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
