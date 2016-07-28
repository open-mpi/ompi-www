<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 19:16:38 2010" -->
<!-- isoreceived="20100712231638" -->
<!-- sent="Mon, 12 Jul 2010 17:15:35 -0600" -->
<!-- isosent="20100712231535" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="4C3BA217.2090106_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinautkoscDR-OotXWzZssgGp_lnqLwIE2hWDCqO_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install OpenMPI on Win 7 machine<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 19:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You don't need to check anything alse in the red window, OpenMPI doesn't 
<br>
know it's in a virtual machine.  If you're running Windows in a virtual 
<br>
cluster, are you running as 32-bit or 64-bit?
<br>
<p>Damien
<br>
<p>On 12/07/2010 5:05 PM, Alexandru Blidaru wrote:
<br>
<span class="quotelev1">&gt; Wow thanks a lot guys. I'll try it tomorrow morning. I'll admit that 
</span><br>
<span class="quotelev1">&gt; this time when i saw that there are some header files &quot;not found&quot; i 
</span><br>
<span class="quotelev1">&gt; didn't even bother going through the all process as I did previously. 
</span><br>
<span class="quotelev1">&gt; Could have had it installed by today. Well i'll give it a try tomorrow 
</span><br>
<span class="quotelev1">&gt; and come back to you with a confirmation of whether it works or not. 
</span><br>
<span class="quotelev1">&gt; For the &quot;virtual cluster&quot;, should I select check any of the checkboxes 
</span><br>
<span class="quotelev1">&gt; in the red window?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, thanks a lot guys, you've been of great help to me. I 
</span><br>
<span class="quotelev1">&gt; really want to do my project well, as not many almost-18 year olds get 
</span><br>
<span class="quotelev1">&gt; to work with clusters and I'd like to take full advantage of the 
</span><br>
<span class="quotelev1">&gt; experience
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 12, 2010 at 5:38 PM, Damien &lt;damien_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That red window is what you should see after the first Configure
</span><br>
<span class="quotelev1">&gt;     step in CMake.  You need to do the next few steps in CMake and
</span><br>
<span class="quotelev1">&gt;     Visual Studio to get a Windows OpenMPI build done.  That's how
</span><br>
<span class="quotelev1">&gt;     CMake works.  It's complicated because CMake has to be able to
</span><br>
<span class="quotelev1">&gt;     build on multiple OSes so what you do on each OS is different.
</span><br>
<span class="quotelev1">&gt;      Here's what to do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     As part of your original CMake setup, it will have asked you where
</span><br>
<span class="quotelev1">&gt;     to put the CMake binaries.  That's in &quot;Where to build the
</span><br>
<span class="quotelev1">&gt;     binaries&quot; line in the main CMake window, at the top.  Note that
</span><br>
<span class="quotelev1">&gt;     these binaries aren't the OpenMPI binaries, they're the Visual
</span><br>
<span class="quotelev1">&gt;     Studio project files that Visual Studio uses to build the OpenMPI
</span><br>
<span class="quotelev1">&gt;     binaries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     See the CMAKE_BUILD_TYPE line?  It says Debug.  Change Debug to
</span><br>
<span class="quotelev1">&gt;     Release if you want a Release build (you probably do).  Press the
</span><br>
<span class="quotelev1">&gt;     Configure button again and let it run.  That should be all clean.
</span><br>
<span class="quotelev1">&gt;      Now press the Generate button.  That will build the Visual Studio
</span><br>
<span class="quotelev1">&gt;     project files for you.  They'll go to the &quot;Where to build the
</span><br>
<span class="quotelev1">&gt;     binaries&quot; directory.  From here you're done with CMake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Next you have two options.  You can build from a command line, or
</span><br>
<span class="quotelev1">&gt;     from within Visual Studio itself.  For command-line instructions,
</span><br>
<span class="quotelev1">&gt;     read this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/community/lists/users/2010/02/12013.php">https://www.open-mpi.org/community/lists/users/2010/02/12013.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Note that you need to execute the devenv commands in that post
</span><br>
<span class="quotelev1">&gt;     from within a Visual Studio command prompt: Start, All Programs,
</span><br>
<span class="quotelev1">&gt;     Visual Studio 2008, Visual Studio Tools, Visual Studio 2008 Win64
</span><br>
<span class="quotelev1">&gt;     x64 Command Prompt.  I'm assuming you want a 64-bit build.  You
</span><br>
<span class="quotelev1">&gt;     need to be in that &quot;Where to build the binaries&quot; directory as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To use Visual Studio directly, start Visual Studio, and open the
</span><br>
<span class="quotelev1">&gt;     OpenMPI.sln project file that's in your &quot;Where to build the
</span><br>
<span class="quotelev1">&gt;     binaries&quot; directory.  In the Solution Explorer you'll see a list
</span><br>
<span class="quotelev1">&gt;     of sub-projects.  Right-click the top heading: Solution 'Open MPI'
</span><br>
<span class="quotelev1">&gt;     and select Configuration Manager.  You should get a window that
</span><br>
<span class="quotelev1">&gt;     says at the top Active Solution Configuration, with Release below
</span><br>
<span class="quotelev1">&gt;     it.  If it says Debug, just change that to Release and it will
</span><br>
<span class="quotelev1">&gt;     flip all the sub-projects over as well.  Note on the the list of
</span><br>
<span class="quotelev1">&gt;     projects the INSTALL project will not be checked.  Check that now
</span><br>
<span class="quotelev1">&gt;     and close the window.   Now right-click Solution 'Open MPI' again
</span><br>
<span class="quotelev1">&gt;     and hit Build Solution.  It takes a while to compile everything.
</span><br>
<span class="quotelev1">&gt;      If you get errors about error code -31 and mt.exe at the end of
</span><br>
<span class="quotelev1">&gt;     the build, that's your virus scanner locking the new exe/dll files
</span><br>
<span class="quotelev1">&gt;     and the install project complains.  Keep right-clicking and Build
</span><br>
<span class="quotelev1">&gt;     Solution until it goes through.  The final Open MPI include files
</span><br>
<span class="quotelev1">&gt;     and binaries are in the C:\Users\Alex's\Downloads......\installed
</span><br>
<span class="quotelev1">&gt;     directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     HTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PS OpenMPI 1.4.2 doesn't have Fortran support on Windows.  You
</span><br>
<span class="quotelev1">&gt;     need the dev 1.5 series for that and a Fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 12/07/2010 11:35 AM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I installed a 90 day trial of Visual Studio 2008, and I am
</span><br>
<span class="quotelev1">&gt;         pretty sure I am getting the exact same thing. The log and the
</span><br>
<span class="quotelev1">&gt;         picture are attached just as last time. Any new ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
