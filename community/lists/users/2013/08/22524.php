<?
$subject_val = "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 15:56:04 2013" -->
<!-- isoreceived="20130820195604" -->
<!-- sent="Tue, 20 Aug 2013 12:56:03 -0700" -->
<!-- isosent="20130820195603" -->
<!-- name="Richard Haney" -->
<!-- email="rfhaney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make" -->
<!-- id="CACpvy6AkWwN5Bb+rKejw09OQVH4x_1b5fHs2=gdtsqA1eUYf8A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACpvy6A3cL=xoVM-DEGjPBamNzxCtX=O_YAFPAxPGKmcC1w6pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make<br>
<strong>From:</strong> Richard Haney (<em>rfhaney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 15:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22523.php">RoboBeans: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Maybe in reply to:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Reply:</strong> <a href="22525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is my fourth attempt to get past the robot censor.  Not even text
<br>
format passed.  If this message passes the censor, it is likely because
<br>
attachments are considered part of the &quot;body&quot; of the message, which the
<br>
censor seems to object to due to size.  I am deleting the attachments.
<br>
<p>Re-sending:
<br>
<p>On Tue, Aug 20, 2013 at 12:16 PM, Richard Haney &lt;rfhaney_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks  Jeremiah,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your comments were most helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did find where configure sets
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_arch=&quot;IA32&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and subsequently prints out [sic]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for asssembly architecture... IA32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried changing the 'ompi_cv_asm_arch=&quot;IA32&quot; ' to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_arch=&quot;AMD64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which was an alternative not chosen in the original configure because my
</span><br>
<span class="quotelev1">&gt; long has size 4 -- a very puzzling excuse for not using &quot;AMD64&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A more complete message from me &quot;awaits moderator approval&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a puzzle to me why the OpenMPI issue-reporting info asks for lots
</span><br>
<span class="quotelev1">&gt; and lots of info, including several compressed files of rather large files
</span><br>
<span class="quotelev1">&gt; and yet the listserv seems to have rather stringent size limits on the body
</span><br>
<span class="quotelev1">&gt; of messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems as if the original designers and developers and maintainers had
</span><br>
<span class="quotelev1">&gt; grand, ambitious ideas for OpenMPI but that now the maintainers have
</span><br>
<span class="quotelev1">&gt; considerably deflated ambitions and hopes for OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to OpenMPI and I am only trying to build and install it because
</span><br>
<span class="quotelev1">&gt; an opt++2.4 numerical optimization package I want to install says it has
</span><br>
<span class="quotelev1">&gt; facilities to use any installed MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  But I am having sooooooo much trouble with trying to build the package
</span><br>
<span class="quotelev1">&gt; -- specifically trying to get past the make of asm.c in
</span><br>
<span class="quotelev1">&gt; /openmpi-1.6.5/opal/asm  -- that I'm wondering if it is worthwhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Haney
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 19, 2013 at 8:04 AM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure that the code is building with the right assembly file?
</span><br>
<span class="quotelev2">&gt;&gt; AMD64.asm looks to be using pushq, which is the right form to use for
</span><br>
<span class="quotelev2">&gt;&gt; 64-bit code.  I suspect that this is a configure issue (detecting your
</span><br>
<span class="quotelev2">&gt;&gt; architecture as IA-32 and not x86-64), not a problem in the assembly files
</span><br>
<span class="quotelev2">&gt;&gt; themselves.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22523.php">RoboBeans: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Maybe in reply to:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Reply:</strong> <a href="22525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
