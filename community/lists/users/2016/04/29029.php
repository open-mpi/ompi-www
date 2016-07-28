<?
$subject_val = "Re: [OMPI users] MPIRUN SEGMENTATION FAULT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 12:51:06 2016" -->
<!-- isoreceived="20160425165106" -->
<!-- sent="Mon, 25 Apr 2016 12:50:59 -0400" -->
<!-- isosent="20160425165059" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN SEGMENTATION FAULT" -->
<!-- id="571E4AF3.1050308_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5sMYNPSxviT-u8GHFpSf5XVPjaj=f4fgXkAH77AebCt7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIRUN SEGMENTATION FAULT<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 12:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29030.php">Rob Malpass: "[OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Elio
<br>
<p>As Gilles said, if you change the integer size to -i8 in the 
<br>
application, and MPI was built with the default-sized integers
<br>
(4 bytes), things will get really ugly and mismatched.
<br>
Better avoid flags such as -i8, -r8, etc, when compiling MPI programs.
<br>
<p>Have you tried to compile the code with the -traceback flag?
<br>
This at least should tell you where the code is failing (source file
<br>
and line).
<br>
As Ralph said, most likely the program is trying to
<br>
go beyond array boundaries,
<br>
or accessing non-allocated memory.
<br>
That can happen even with innocent strings
<br>
(say a file name or an informative message that are too big).
<br>
<p>A better approach, as suggested by Ralph,
<br>
is to open the core file with gdb.
<br>
It should be named something like &quot;core.98765&quot;, where the &quot;98765&quot; is the 
<br>
process number.
<br>
However, many Linux distributions set the core file size to zero by 
<br>
default, which prevents the core file to be created when the program 
<br>
crashes, but on the upside also prevents disk to fill up with big core 
<br>
files that are forgotten and hang around forever.
<br>
[ulimit -a will tell.]
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On 04/23/2016 07:06 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; If you build your application with intel compilers and -i8, then openmpi
</span><br>
<span class="quotelev1">&gt; must also be built with intel compilers and -i8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, April 24, 2016, Elio Physics &lt;Elio-Physics_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Elio-Physics_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Well, I changed the compiler from mpif90 to mpiifort with
</span><br>
<span class="quotelev1">&gt;     corresponding flags -i8 -g and recompiled. i am not getting the
</span><br>
<span class="quotelev1">&gt;     segmentation fault problem anymore and the program runs but later
</span><br>
<span class="quotelev1">&gt;     stops with no errors (except that the Fermi energy was not found!)
</span><br>
<span class="quotelev1">&gt;     and with some strange empty files that are produced something like:
</span><br>
<span class="quotelev1">&gt;        fortDgcQe3  fortechvF2  fortMaN6a1  fortnxoYy1  fortvR5F8q.  i
</span><br>
<span class="quotelev1">&gt;     still feel something is wrong.. Does anybody know what are these files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     *From:* users &lt;users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;     behalf of Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     *Sent:* Saturday, April 23, 2016 1:38 PM
</span><br>
<span class="quotelev1">&gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;     I don&#146;t see any way this could be compilation related - I suspect
</span><br>
<span class="quotelev1">&gt;     there is simply some error in the program (e.g., forgetting to
</span><br>
<span class="quotelev1">&gt;     initialize some memory region).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Apr 23, 2016, at 8:03 AM, Elio Physics &lt;Elio-Physics_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','Elio-Physics_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hello Andy,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     the program is not mine. I have got it from a group upon request.
</span><br>
<span class="quotelev2">&gt;&gt;     It might be program related because I run other codes such as
</span><br>
<span class="quotelev2">&gt;&gt;     quantum espresso and work perfectly fine although it is the
</span><br>
<span class="quotelev2">&gt;&gt;     cluster people who compiled it. Since I have compiled the program
</span><br>
<span class="quotelev2">&gt;&gt;     I am having problems with, I am thinking that it might be
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;compilation&quot; related. This is why i wanted some experts' opinion
</span><br>
<span class="quotelev2">&gt;&gt;     on this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     *From:*users &lt;users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt;     behalf of Andy Riebs &lt;andy.riebs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','andy.riebs_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *Sent:*Saturday, April 23, 2016 12:49 PM
</span><br>
<span class="quotelev2">&gt;&gt;     *To:*users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *Subject:*Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev2">&gt;&gt;     The challenge for the MPI experts here (of which I am NOT one!) is
</span><br>
<span class="quotelev2">&gt;&gt;     that the problem appears to be in your program; MPI is simply
</span><br>
<span class="quotelev2">&gt;&gt;     reporting that your program failed. If you got the program from
</span><br>
<span class="quotelev2">&gt;&gt;     someone else, you will need to solicit their help. If you wrote
</span><br>
<span class="quotelev2">&gt;&gt;     it, well, it is never a bad time to learn to use gdb!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Best regards
</span><br>
<span class="quotelev2">&gt;&gt;     Andy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 04/23/2016 10:41 AM, Elio Physics wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I am not really an expert with gdb. What is the core file? and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     how to use gdb? I have got three files as an output when the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     executable is used. One is the actual output which stops and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     other two are error files (from which I knew about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *From:*users&lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     behalf of Ralph Castain&lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *Sent:*Saturday, April 23, 2016 11:39 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *To:*Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *Subject:*Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     valgrind isn&#146;t going to help here - there are multiple reasons
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     why your application could be segfaulting. Take a look at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     core file with gdb and find out where it is failing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Apr 22, 2016, at 10:20 PM, Elio Physics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;elio-physics_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','elio-physics_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     One more thing i forgot to mention in my previous e-mail. In the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     output file I get the following message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *From:*users &lt;users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     behalf of Elio Physics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;&lt;javascript:_e(%7B%7D,'cvml','Elio-Physics_at_[hidden]');&gt;Elio-Physics_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','Elio-Physics_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *Sent:*Saturday, April 23, 2016 3:07 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *To:*Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *Subject:*Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I have used valgrind and this is what i got:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     valgrind mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     scf-51551.jlborges.fisica.ufmg.br.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== Memcheck, a memory error detector
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== Copyright (C) 2002-2012, and GNU GPL'd, by Julian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Seward et al.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== Using Valgrind-3.8.1 and LibVEX; rerun with -h for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     copyright info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== Command: mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun noticed that process rank 0 with PID 8147 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     nodejlborges.fisica.ufmg.br
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;<a href="http://jlborges.fisica.ufmg.br/">http://jlborges.fisica.ufmg.br/</a>&gt;exited on signal 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== HEAP SUMMARY:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==     in use at exit: 485,683 bytes in 1,899 blocks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==   total heap usage: 7,723 allocs, 5,824 frees,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     12,185,660 bytes allocated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== LEAK SUMMARY:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==    definitely lost: 34,944 bytes in 34 blocks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==    indirectly lost: 26,613 bytes in 58 blocks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==    still reachable: 424,126 bytes in 1,807 blocks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== Rerun with --leak-check=full to see details of leaked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== For counts of detected and suppressed errors, rerun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     with: -v
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ==8135== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     from 6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     What does that supposed to mean?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *From:*users &lt;users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     behalf of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;&lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *Sent:*Saturday, April 23, 2016 1:36:50 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *To:*Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     *Subject:*Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     All I can say is that your program segfault&#146;d during execution -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     you might want to look at the core file using a debugger like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     gdb to see why it failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     On Apr 22, 2016, at 8:32 PM, Elio Physics
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     &lt;&lt;javascript:_e(%7B%7D,'cvml','Elio-Physics_at_[hidden]');&gt;Elio-Physics_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','Elio-Physics_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I have successfully compiled a code where the executable have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     been produced. However when I started using the executable with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     mpirun, the code stopped with the following error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     &quot;mpirun noticed that process rank 0 with PID 570 on node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     compute-1-9.local exited on signal 11 (Segmentation fault).&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     What is that error due to? and How can i solve it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I will post the make.inc compilation file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     BUILD_TYPE ?=
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #BUILD_TYPE := debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     VERSION = 6.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ifeq ($(BUILD_TYPE), debug)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      VERSION := $(VERSION)$(BUILD_TYPE)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #BIN=~/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     LIB =  -L/opt/intel/mkl/lib/intel64/libmkl_blas95_ilp64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -L/opt/intel/mkl/lib/intel64/libmkl_lapack95_ilp64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -L/opt/intel/mkl/lib/intel64 -lmkl_scalapack_ilp64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -lmkl_intel_ilp64 -lmkl_core -lmkl_sequential -lmkl_blacs_i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ntelmpi_ilp64 -lpthread -lm -ldl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #Include mpif.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     INCLUDE = -I/opt/intel/mkl/include/intel64/ilp64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -I/opt/intel/mkl/lib/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #FFLAGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     FFLAGS = -O2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI=MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Thanks in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Elio
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     University of Rondonia, brazil
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Subscription:&lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     post:&lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Subscription:&lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     post:&lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/04/29005.php">http://www.open-mpi.org/community/lists/users/2016/04/29005.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this
</span><br>
<span class="quotelev2">&gt;&gt;     post:<a href="http://www.open-mpi.org/community/lists/users/2016/04/29007.php">http://www.open-mpi.org/community/lists/users/2016/04/29007.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29012.php">http://www.open-mpi.org/community/lists/users/2016/04/29012.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29030.php">Rob Malpass: "[OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29028.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
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
