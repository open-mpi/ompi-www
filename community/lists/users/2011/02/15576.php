<?
$subject_val = "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 14:30:49 2011" -->
<!-- isoreceived="20110211193049" -->
<!-- sent="Fri, 11 Feb 2011 19:30:44 +0000" -->
<!-- isosent="20110211193044" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x" -->
<!-- id="E36055DA85A60A45A79E06154DCD60CE4BB87F5F_at_CSGMBX202W.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D551FAF.3040208_at_oracle.com" -->
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
<strong>From:</strong> Dennis McRitchie (<em>dmcr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-11 14:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15575.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15569.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15540.php">Gus Correa: "Re: [OMPI users] Mpirun --app option not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
<p>Someone else at the University builds the packages that I use, and we've been experimenting for the last few days with different openmpi build options to see what might be causing this.
<br>
<p>Re the stack, I can always see the entire stack in the TV stack pane, and I can always click on 'main' in the stack pane and thereby make my main program's source code appear. I can then debug as usual. But, as you said, this is still no way to debug a program...
<br>
<p>The only thing that might point the finger at OpenMPI is that the same build options led to different behavior when running with OpenMPI 1.2.8 vs. anything later. But I imagine that it will turn out to be related to the availability (or the lack thereof) of OpenMPI symbols to TotalView as to whether it thinks it should be displaying assembler or not.
<br>
<p>I'll keep you posted with our progress.
<br>
<p>Thanks for the tips.
<br>
<p>Dennis
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Terry Dontje
<br>
Sent: Friday, February 11, 2011 6:38 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x
<br>
<p>Sorry I have to ask this, did you build your lastest OMPI version, not just the application, with the -g flag too.
<br>
<p>IIRC, when I ran into this issue I was actually able to do stepi's and eventually pop up the stack however that is really no way to debug a program :-).
<br>
<p>Unless OMPI is somehow trashing the stack I don't see what OMPI could be doing to cause this type of an issue.  Again when I ran into this issue known working programs still worked I just was unable to get a full stack.  So it was definitely an interfacing issue between totalview and the executable (or the result of how the executable and libraries were compiled).   Another thing I noticed was when using Solaris Studio dbx I was also able to see the full stack where I could not when using totaview.  I am not sure if gdb could also see the full stack or not but it might be worth a try to attach gdb to a running program and see if you get a full stack.
<br>
<p>--td
<br>
<p><p>On 02/09/2011 05:35 PM, Dennis McRitchie wrote:
<br>
Thanks Terry.
<br>
<p>Unfortunately, -fno-omit-frame-pointer is the default for the Intel compiler when -g  is used, which I am using since it is necessary for source level debugging. So the compiler kindly tells me that it is ignoring your suggested option when I specify it.  :)
<br>
<p>Also, since I can reproduce this problem by simply changing the OpenMPI version, without changing the compiler version, it strikes me as being more likely to be an OpenMPI-related issue: 1.2.8 works, but anything later does not (as described below).
<br>
<p>I have tried different versions of TotalView from 8.1 to 8.9, but all behave the same.
<br>
<p>I was wondering if a change to the openmpi-totalview.tcl script might be needed?
<br>
<p>Dennis
<br>
<p><p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Terry Dontje
<br>
Sent: Wednesday, February 09, 2011 5:02 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x
<br>
<p>This sounds like something I ran into some time ago that involved the compiler omitting frame pointers.  You may want to try to compile your code with -fno-omit-frame-pointer.  I am unsure if you may need to do the same while building MPI though.
<br>
<p>--td
<br>
<p>On 02/09/2011 02:49 PM, Dennis McRitchie wrote:
<br>
<p>Hi,
<br>
<p><p><p>I'm encountering a strange problem and can't find it having been discussed on this mailing list.
<br>
<p><p><p>When building and running my parallel program using any recent Intel compiler and OpenMPI 1.2.8, TotalView behaves entirely correctly, displaying the &quot;Process mpirun is a parallel job. Do you want to stop the job now?&quot; dialog box, and stopping at the start of the program. The code displayed is the source code of my program's function main, and the stack trace window shows that we are stopped in the poll function many levels &quot;up&quot; from my main function's call to MPI_Init. I can then set breakpoints, single step, etc., and the code runs appropriately.
<br>
<p><p><p>But when building and running using Intel compilers with OpenMPI 1.3.x or 1.4.x, TotalView displays the usual dialog box, and stops at the start of the program; but my main program's source code is *not* displayed. The stack trace window again shows that we are stopped in the poll function several levels &quot;up&quot; from my main function's call to MPI_Init; but this time, the code displayed is the assembler code for the poll function itself.
<br>
<p><p><p>If I click on 'main' in the stack trace window, the source code for my program's function main is then displayed, and I can now set breakpoints, single step, etc. as usual.
<br>
<p><p><p>So why is the program's source code not displayed when using 1.3.x and 1.4.x, but is displayed when using 1.2.8. This change in behavior is fairly confusing to our users, and it would be nice to have it work as it used to, if possible.
<br>
<p><p><p>Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dennis
<br>
<p><p><p>Dennis McRitchie
<br>
<p>Computational Science and Engineering Support (CSES)
<br>
<p>Academic Services Department
<br>
<p>Office of Information Technology
<br>
<p>Princeton University
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><pre>
--
[Oracle]
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
[Oracle]
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15576/image001.gif" alt="image001.gif
">
<!-- attachment="image001.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15575.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15569.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15540.php">Gus Correa: "Re: [OMPI users] Mpirun --app option not working"</a>
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
