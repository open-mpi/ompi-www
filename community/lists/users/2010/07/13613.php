<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 20:01:52 2010" -->
<!-- isoreceived="20100713000152" -->
<!-- sent="Mon, 12 Jul 2010 18:00:53 -0600" -->
<!-- isosent="20100713000053" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="4C3BACB5.2070405_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinqZlaf5-ZjMh1kZzRyzGR41wYy_WiaKhYyRaGH_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-12 20:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13614.php">Jack Bryan: "[OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13622.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13622.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool.  If you're building OpenMPI on 32-bit Windows as well, you won't 
<br>
have any 64-bit switches to sort out.  This part of my instructions:
<br>
<p>Visual Studio command prompt: &quot;Start, All Programs, Visual Studio 2008, 
<br>
Visual Studio Tools, Visual Studio 2008 Win64 x64 Command Prompt&quot; is 
<br>
slightly wrong for 32-bit Windows, there won't be a Win64 x64 prompt.  
<br>
There will be only one command prompt option on a 32-bit install (use 
<br>
that), and CMake will have set you up with a 32-bit build by default, so 
<br>
you'll be fine.  Post back if you need help.
<br>
<p>Damien
<br>
<p>On 12/07/2010 5:47 PM, Alexandru Blidaru wrote:
<br>
<span class="quotelev1">&gt; I am running 32 bit Windows. The actual cluster is 64 bit and the OS 
</span><br>
<span class="quotelev1">&gt; is CentOS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 12, 2010 at 7:15 PM, Damien Hocking &lt;damien_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You don't need to check anything alse in the red window, OpenMPI
</span><br>
<span class="quotelev1">&gt;     doesn't know it's in a virtual machine.  If you're running Windows
</span><br>
<span class="quotelev1">&gt;     in a virtual cluster, are you running as 32-bit or 64-bit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 12/07/2010 5:05 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Wow thanks a lot guys. I'll try it tomorrow morning. I'll admit
</span><br>
<span class="quotelev2">&gt;&gt;     that this time when i saw that there are some header files &quot;not
</span><br>
<span class="quotelev2">&gt;&gt;     found&quot; i didn't even bother going through the all process as I
</span><br>
<span class="quotelev2">&gt;&gt;     did previously. Could have had it installed by today. Well i'll
</span><br>
<span class="quotelev2">&gt;&gt;     give it a try tomorrow and come back to you with a confirmation
</span><br>
<span class="quotelev2">&gt;&gt;     of whether it works or not. For the &quot;virtual cluster&quot;, should I
</span><br>
<span class="quotelev2">&gt;&gt;     select check any of the checkboxes in the red window?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Either way, thanks a lot guys, you've been of great help to me. I
</span><br>
<span class="quotelev2">&gt;&gt;     really want to do my project well, as not many almost-18 year
</span><br>
<span class="quotelev2">&gt;&gt;     olds get to work with clusters and I'd like to take full
</span><br>
<span class="quotelev2">&gt;&gt;     advantage of the experience
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mon, Jul 12, 2010 at 5:38 PM, Damien &lt;damien_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Alex,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         That red window is what you should see after the first
</span><br>
<span class="quotelev2">&gt;&gt;         Configure step in CMake.  You need to do the next few steps
</span><br>
<span class="quotelev2">&gt;&gt;         in CMake and Visual Studio to get a Windows OpenMPI build
</span><br>
<span class="quotelev2">&gt;&gt;         done.  That's how CMake works.  It's complicated because
</span><br>
<span class="quotelev2">&gt;&gt;         CMake has to be able to build on multiple OSes so what you do
</span><br>
<span class="quotelev2">&gt;&gt;         on each OS is different.  Here's what to do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         As part of your original CMake setup, it will have asked you
</span><br>
<span class="quotelev2">&gt;&gt;         where to put the CMake binaries.  That's in &quot;Where to build
</span><br>
<span class="quotelev2">&gt;&gt;         the binaries&quot; line in the main CMake window, at the top.
</span><br>
<span class="quotelev2">&gt;&gt;          Note that these binaries aren't the OpenMPI binaries,
</span><br>
<span class="quotelev2">&gt;&gt;         they're the Visual Studio project files that Visual Studio
</span><br>
<span class="quotelev2">&gt;&gt;         uses to build the OpenMPI binaries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         See the CMAKE_BUILD_TYPE line?  It says Debug.  Change Debug
</span><br>
<span class="quotelev2">&gt;&gt;         to Release if you want a Release build (you probably do).
</span><br>
<span class="quotelev2">&gt;&gt;          Press the Configure button again and let it run.  That
</span><br>
<span class="quotelev2">&gt;&gt;         should be all clean.  Now press the Generate button.  That
</span><br>
<span class="quotelev2">&gt;&gt;         will build the Visual Studio project files for you.  They'll
</span><br>
<span class="quotelev2">&gt;&gt;         go to the &quot;Where to build the binaries&quot; directory.  From here
</span><br>
<span class="quotelev2">&gt;&gt;         you're done with CMake.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Next you have two options.  You can build from a command
</span><br>
<span class="quotelev2">&gt;&gt;         line, or from within Visual Studio itself.  For command-line
</span><br>
<span class="quotelev2">&gt;&gt;         instructions, read this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="https://www.open-mpi.org/community/lists/users/2010/02/12013.php">https://www.open-mpi.org/community/lists/users/2010/02/12013.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Note that you need to execute the devenv commands in that
</span><br>
<span class="quotelev2">&gt;&gt;         post from within a Visual Studio command prompt: Start, All
</span><br>
<span class="quotelev2">&gt;&gt;         Programs, Visual Studio 2008, Visual Studio Tools, Visual
</span><br>
<span class="quotelev2">&gt;&gt;         Studio 2008 Win64 x64 Command Prompt.  I'm assuming you want
</span><br>
<span class="quotelev2">&gt;&gt;         a 64-bit build.  You need to be in that &quot;Where to build the
</span><br>
<span class="quotelev2">&gt;&gt;         binaries&quot; directory as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         To use Visual Studio directly, start Visual Studio, and open
</span><br>
<span class="quotelev2">&gt;&gt;         the OpenMPI.sln project file that's in your &quot;Where to build
</span><br>
<span class="quotelev2">&gt;&gt;         the binaries&quot; directory.  In the Solution Explorer you'll see
</span><br>
<span class="quotelev2">&gt;&gt;         a list of sub-projects.  Right-click the top heading:
</span><br>
<span class="quotelev2">&gt;&gt;         Solution 'Open MPI' and select Configuration Manager.  You
</span><br>
<span class="quotelev2">&gt;&gt;         should get a window that says at the top Active Solution
</span><br>
<span class="quotelev2">&gt;&gt;         Configuration, with Release below it.  If it says Debug, just
</span><br>
<span class="quotelev2">&gt;&gt;         change that to Release and it will flip all the sub-projects
</span><br>
<span class="quotelev2">&gt;&gt;         over as well.  Note on the the list of projects the INSTALL
</span><br>
<span class="quotelev2">&gt;&gt;         project will not be checked.  Check that now and close the
</span><br>
<span class="quotelev2">&gt;&gt;         window.   Now right-click Solution 'Open MPI' again and hit
</span><br>
<span class="quotelev2">&gt;&gt;         Build Solution.  It takes a while to compile everything.  If
</span><br>
<span class="quotelev2">&gt;&gt;         you get errors about error code -31 and mt.exe at the end of
</span><br>
<span class="quotelev2">&gt;&gt;         the build, that's your virus scanner locking the new exe/dll
</span><br>
<span class="quotelev2">&gt;&gt;         files and the install project complains.  Keep right-clicking
</span><br>
<span class="quotelev2">&gt;&gt;         and Build Solution until it goes through.  The final Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;         include files and binaries are in the
</span><br>
<span class="quotelev2">&gt;&gt;         C:\Users\Alex's\Downloads......\installed directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         HTH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         PS OpenMPI 1.4.2 doesn't have Fortran support on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;          You need the dev 1.5 series for that and a Fortran compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 12/07/2010 11:35 AM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hey,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I installed a 90 day trial of Visual Studio 2008, and I
</span><br>
<span class="quotelev2">&gt;&gt;             am pretty sure I am getting the exact same thing. The log
</span><br>
<span class="quotelev2">&gt;&gt;             and the picture are attached just as last time. Any new
</span><br>
<span class="quotelev2">&gt;&gt;             ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Regards,
</span><br>
<span class="quotelev2">&gt;&gt;             Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13614.php">Jack Bryan: "[OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13612.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13622.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13622.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
