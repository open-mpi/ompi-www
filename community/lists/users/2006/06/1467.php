<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 26 17:56:38 2006" -->
<!-- isoreceived="20060626215638" -->
<!-- sent="Mon, 26 Jun 2006 16:56:33 -0500" -->
<!-- isosent="20060626215633" -->
<!-- name="Benjamin Landsteiner" -->
<!-- email="landstei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser error after v1.1 upgrade" -->
<!-- id="713612DF-DE8B-4572-A74F-2C35744AE3CF_at_stolaf.edu" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Benjamin Landsteiner (<em>landstei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-26 17:56:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange.  I had actually done this before I emailed (several times,  
<br>
in fact), but for the sake of completeness, I did it once more.  This  
<br>
time, it worked!  No clue why it worked this time around.
<br>
<p>For those of you who in the future come across this problem, here are  
<br>
the (more or less exact) steps I took to recover from the problem:
<br>
<p>PROBLEM:  You installed v1.1 of Open MPI and experience keyval parse  
<br>
errors upon running mpicc, mpif77, mpic++, and so forth.
<br>
<p>SOLUTION:
<br>
1.  Go to your v1.1 directory, and type './configure' if you have not  
<br>
already done so
<br>
2.  Type 'make uninstall'
<br>
3.  Go to your v1.0.2 directory, and reconfigure using the same  
<br>
settings as you installed with (if you still have the install  
<br>
directory, you probably don't need to do this as it has already been  
<br>
configured)
<br>
4.  In the v1.0.2 directory, type 'make uninstall'
<br>
5.  For good measure, I went back to the v1.1 directory and typed  
<br>
'make uninstall' again
<br>
6.  Find lingering Open MPI directories and files and then delete  
<br>
them (for instance, empty Open MPI-related folders remained in my / 
<br>
usr/local/* directories)
<br>
7.  At this point, I restarted my machine.  Not sure if it's  
<br>
necessary or not.
<br>
8.  Go back to the v1.1 directory.  Type 'make clean', then  
<br>
reconfigure, then recompile and reinstall
<br>
9.  Things should work now.
<br>
<p><p>Thank you Michael,
<br>
~Ben
<br>
<p>+--------------------+
<br>
Benjamin Landsteiner
<br>
landstei_at_[hidden]
<br>
<p>On 2006/06/26, at 3:48&#229;&#141;&#136;&#229;&#190;&#140;, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; You may have to properly uninstall OpenMPI 1.0.2 before installing
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was an issue in the past.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would recommend you go into your OpenMPI 1.1 directory and type
</span><br>
<span class="quotelev1">&gt; &quot;make uninstall&quot;, then if you have it go into your OpenMPI 1.0.2
</span><br>
<span class="quotelev1">&gt; directory and do the same.  If you don't have a directory with
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.0.2 configured already then either rebuild OpenMPI 1.0.2 or
</span><br>
<span class="quotelev1">&gt; go into /usr/local and identify all remaining OpenMPI directories and
</span><br>
<span class="quotelev1">&gt; components and remove them.  Basically you should find directories
</span><br>
<span class="quotelev1">&gt; modified when you installed OpenMPI 1.1 (or when you uninstalled it)
</span><br>
<span class="quotelev1">&gt; and you may find components dated from when you installed OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.0.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt; 	I recently upgraded to v1.1 of Open MPI and ran into a problem on my
</span><br>
<span class="quotelev2">&gt;&gt; head node that I can't seem to solve.  Upon running mpicc, mpiCC,  
</span><br>
<span class="quotelev2">&gt;&gt; mpic
</span><br>
<span class="quotelev2">&gt;&gt; ++, and so forth, I get an error like this:
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
<li><strong>Next message:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
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
