<?
$subject_val = "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 06:38:29 2011" -->
<!-- isoreceived="20110211113829" -->
<!-- sent="Fri, 11 Feb 2011 06:38:23 -0500" -->
<!-- isosent="20110211113823" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x" -->
<!-- id="4D551FAF.3040208_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E36055DA85A60A45A79E06154DCD60CE4BB79671_at_CSGMBX202W.pu.win.princeton.edu" -->
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
<strong>Date:</strong> 2011-02-11 06:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15570.php">Patrick Le Dot: "[OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>Previous message:</strong> <a href="15568.php">Bibrak Qamar: "[OMPI users] Collective comminucation API"</a>
<li><strong>In reply to:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15576.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Reply:</strong> <a href="15576.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I have to ask this, did you build your lastest OMPI version, not 
<br>
just the application, with the -g flag too.
<br>
<p>IIRC, when I ran into this issue I was actually able to do stepi's and 
<br>
eventually pop up the stack however that is really no way to debug a 
<br>
program :-).
<br>
<p>Unless OMPI is somehow trashing the stack I don't see what OMPI could be 
<br>
doing to cause this type of an issue.  Again when I ran into this issue 
<br>
known working programs still worked I just was unable to get a full 
<br>
stack.  So it was definitely an interfacing issue between totalview and 
<br>
the executable (or the result of how the executable and libraries were 
<br>
compiled).   Another thing I noticed was when using Solaris Studio dbx I 
<br>
was also able to see the full stack where I could not when using 
<br>
totaview.  I am not sure if gdb could also see the full stack or not but 
<br>
it might be worth a try to attach gdb to a running program and see if 
<br>
you get a full stack.
<br>
<p>--td
<br>
<p><p>On 02/09/2011 05:35 PM, Dennis McRitchie wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Terry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, -fno-omit-frame-pointer is the default for the Intel 
</span><br>
<span class="quotelev1">&gt; compiler when --g  is used, which I am using since it is necessary for 
</span><br>
<span class="quotelev1">&gt; source level debugging. So the compiler kindly tells me that it is 
</span><br>
<span class="quotelev1">&gt; ignoring your suggested option when I specify it. J
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, since I can reproduce this problem by simply changing the 
</span><br>
<span class="quotelev1">&gt; OpenMPI version, without changing the compiler version, it strikes me 
</span><br>
<span class="quotelev1">&gt; as being more likely to be an OpenMPI-related issue: 1.2.8 works, but 
</span><br>
<span class="quotelev1">&gt; anything later does not (as described below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried different versions of TotalView from 8.1 to 8.9, but all 
</span><br>
<span class="quotelev1">&gt; behave the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was wondering if a change to the openmpi-totalview.tcl script might 
</span><br>
<span class="quotelev1">&gt; be needed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dennis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Terry Dontje
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, February 09, 2011 5:02 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Totalview not showing main program on 
</span><br>
<span class="quotelev1">&gt; startup with OpenMPI 1.3.x and 1.4.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sounds like something I ran into some time ago that involved the 
</span><br>
<span class="quotelev1">&gt; compiler omitting frame pointers.  You may want to try to compile your 
</span><br>
<span class="quotelev1">&gt; code with -fno-omit-frame-pointer.  I am unsure if you may need to do 
</span><br>
<span class="quotelev1">&gt; the same while building MPI though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/09/2011 02:49 PM, Dennis McRitchie wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15569/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15569/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15570.php">Patrick Le Dot: "[OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>Previous message:</strong> <a href="15568.php">Bibrak Qamar: "[OMPI users] Collective comminucation API"</a>
<li><strong>In reply to:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15576.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Reply:</strong> <a href="15576.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
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
