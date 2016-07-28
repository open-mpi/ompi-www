<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 19:05:25 2010" -->
<!-- isoreceived="20100712230525" -->
<!-- sent="Mon, 12 Jul 2010 19:05:00 -0400" -->
<!-- isosent="20100712230500" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="AANLkTinautkoscDR-OotXWzZssgGp_lnqLwIE2hWDCqO_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C3B8B48.0_at_khubla.com" -->
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
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 19:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow thanks a lot guys. I'll try it tomorrow morning. I'll admit that this
<br>
time when i saw that there are some header files &quot;not found&quot; i didn't even
<br>
bother going through the all process as I did previously. Could have had it
<br>
installed by today. Well i'll give it a try tomorrow and come back to you
<br>
with a confirmation of whether it works or not. For the &quot;virtual cluster&quot;,
<br>
should I select check any of the checkboxes in the red window?
<br>
<p>Either way, thanks a lot guys, you've been of great help to me. I really
<br>
want to do my project well, as not many almost-18 year olds get to work with
<br>
clusters and I'd like to take full advantage of the experience
<br>
<p><p>On Mon, Jul 12, 2010 at 5:38 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That red window is what you should see after the first Configure step in
</span><br>
<span class="quotelev1">&gt; CMake.  You need to do the next few steps in CMake and Visual Studio to get
</span><br>
<span class="quotelev1">&gt; a Windows OpenMPI build done.  That's how CMake works.  It's complicated
</span><br>
<span class="quotelev1">&gt; because CMake has to be able to build on multiple OSes so what you do on
</span><br>
<span class="quotelev1">&gt; each OS is different.  Here's what to do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As part of your original CMake setup, it will have asked you where to put
</span><br>
<span class="quotelev1">&gt; the CMake binaries.  That's in &quot;Where to build the binaries&quot; line in the
</span><br>
<span class="quotelev1">&gt; main CMake window, at the top.  Note that these binaries aren't the OpenMPI
</span><br>
<span class="quotelev1">&gt; binaries, they're the Visual Studio project files that Visual Studio uses to
</span><br>
<span class="quotelev1">&gt; build the OpenMPI binaries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the CMAKE_BUILD_TYPE line?  It says Debug.  Change Debug to Release if
</span><br>
<span class="quotelev1">&gt; you want a Release build (you probably do).  Press the Configure button
</span><br>
<span class="quotelev1">&gt; again and let it run.  That should be all clean.  Now press the Generate
</span><br>
<span class="quotelev1">&gt; button.  That will build the Visual Studio project files for you.  They'll
</span><br>
<span class="quotelev1">&gt; go to the &quot;Where to build the binaries&quot; directory.  From here you're done
</span><br>
<span class="quotelev1">&gt; with CMake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next you have two options.  You can build from a command line, or from
</span><br>
<span class="quotelev1">&gt; within Visual Studio itself.  For command-line instructions, read this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2010/02/12013.php">https://www.open-mpi.org/community/lists/users/2010/02/12013.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that you need to execute the devenv commands in that post from within
</span><br>
<span class="quotelev1">&gt; a Visual Studio command prompt: Start, All Programs, Visual Studio 2008,
</span><br>
<span class="quotelev1">&gt; Visual Studio Tools, Visual Studio 2008 Win64 x64 Command Prompt.  I'm
</span><br>
<span class="quotelev1">&gt; assuming you want a 64-bit build.  You need to be in that &quot;Where to build
</span><br>
<span class="quotelev1">&gt; the binaries&quot; directory as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To use Visual Studio directly, start Visual Studio, and open the
</span><br>
<span class="quotelev1">&gt; OpenMPI.sln project file that's in your &quot;Where to build the binaries&quot;
</span><br>
<span class="quotelev1">&gt; directory.  In the Solution Explorer you'll see a list of sub-projects.
</span><br>
<span class="quotelev1">&gt;  Right-click the top heading: Solution 'Open MPI' and select Configuration
</span><br>
<span class="quotelev1">&gt; Manager.  You should get a window that says at the top Active Solution
</span><br>
<span class="quotelev1">&gt; Configuration, with Release below it.  If it says Debug, just change that to
</span><br>
<span class="quotelev1">&gt; Release and it will flip all the sub-projects over as well.  Note on the the
</span><br>
<span class="quotelev1">&gt; list of projects the INSTALL project will not be checked.  Check that now
</span><br>
<span class="quotelev1">&gt; and close the window.   Now right-click Solution 'Open MPI' again and hit
</span><br>
<span class="quotelev1">&gt; Build Solution.  It takes a while to compile everything.  If you get errors
</span><br>
<span class="quotelev1">&gt; about error code -31 and mt.exe at the end of the build, that's your virus
</span><br>
<span class="quotelev1">&gt; scanner locking the new exe/dll files and the install project complains.
</span><br>
<span class="quotelev1">&gt;  Keep right-clicking and Build Solution until it goes through.  The final
</span><br>
<span class="quotelev1">&gt; Open MPI include files and binaries are in the
</span><br>
<span class="quotelev1">&gt; C:\Users\Alex's\Downloads......\installed directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS OpenMPI 1.4.2 doesn't have Fortran support on Windows.  You need the dev
</span><br>
<span class="quotelev1">&gt; 1.5 series for that and a Fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/07/2010 11:35 AM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed a 90 day trial of Visual Studio 2008, and I am pretty sure I
</span><br>
<span class="quotelev2">&gt;&gt; am getting the exact same thing. The log and the picture are attached just
</span><br>
<span class="quotelev2">&gt;&gt; as last time. Any new ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
