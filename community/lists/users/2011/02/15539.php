<?
$subject_val = "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 17:01:00 2011" -->
<!-- isoreceived="20110209220100" -->
<!-- sent="Wed, 09 Feb 2011 17:02:10 -0500" -->
<!-- isosent="20110209220210" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x" -->
<!-- id="4D530EE2.9040005_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E36055DA85A60A45A79E06154DCD60CE4BB79562_at_CSGMBX202W.pu.win.princeton.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 17:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15540.php">Gus Correa: "Re: [OMPI users] Mpirun --app option not working"</a>
<li><strong>Previous message:</strong> <a href="15538.php">Dennis McRitchie: "[OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="15538.php">Dennis McRitchie: "[OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Reply:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like something I ran into some time ago that involved the 
<br>
compiler omitting frame pointers.  You may want to try to compile your 
<br>
code with -fno-omit-frame-pointer.  I am unsure if you may need to do 
<br>
the same while building MPI though.
<br>
<p>--td
<br>
<p>On 02/09/2011 02:49 PM, Dennis McRitchie wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm encountering a strange problem and can't find it having been discussed on this mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When building and running my parallel program using any recent Intel compiler and OpenMPI 1.2.8, TotalView behaves entirely correctly, displaying the &quot;Process mpirun is a parallel job. Do you want to stop the job now?&quot; dialog box, and stopping at the start of the program. The code displayed is the source code of my program's function main, and the stack trace window shows that we are stopped in the poll function many levels &quot;up&quot; from my main function's call to MPI_Init. I can then set breakpoints, single step, etc., and the code runs appropriately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when building and running using Intel compilers with OpenMPI 1.3.x or 1.4.x, TotalView displays the usual dialog box, and stops at the start of the program; but my main program's source code is *not* displayed. The stack trace window again shows that we are stopped in the poll function several levels &quot;up&quot; from my main function's call to MPI_Init; but this time, the code displayed is the assembler code for the poll function itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I click on 'main' in the stack trace window, the source code for my program's function main is then displayed, and I can now set breakpoints, single step, etc. as usual.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So why is the program's source code not displayed when using 1.3.x and 1.4.x, but is displayed when using 1.2.8. This change in behavior is fairly confusing to our users, and it would be nice to have it work as it used to, if possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;         Dennis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dennis McRitchie
</span><br>
<span class="quotelev1">&gt; Computational Science and Engineering Support (CSES)
</span><br>
<span class="quotelev1">&gt; Academic Services Department
</span><br>
<span class="quotelev1">&gt; Office of Information Technology
</span><br>
<span class="quotelev1">&gt; Princeton University
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
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15539/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15540.php">Gus Correa: "Re: [OMPI users] Mpirun --app option not working"</a>
<li><strong>Previous message:</strong> <a href="15538.php">Dennis McRitchie: "[OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="15538.php">Dennis McRitchie: "[OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Reply:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
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
