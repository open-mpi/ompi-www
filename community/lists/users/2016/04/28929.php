<?
$subject_val = "[OMPI users] Debugging help";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 14:38:53 2016" -->
<!-- isoreceived="20160412183853" -->
<!-- sent="Tue, 12 Apr 2016 14:38:53 -0400" -->
<!-- isosent="20160412183853" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Debugging help" -->
<!-- id="CAHXxYDhdidT_FHj7myk6oRXJ8dkhBnT31tuZ3t9_htZqPZ66zQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Debugging help<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 14:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28930.php">dpchoudh .: "[OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28928.php">Ralph Castain: "Re: [OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
<li><strong>Reply:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I am trying to set a breakpoint during the modex exchange process so I can
<br>
see the data being passed for different transport type. I assume that this
<br>
is being done in the context of orted since this is part of process launch.
<br>
<p>Here is what I did: (All of this pertains to the master branch and NOT the
<br>
1.10 release)
<br>
<p>1. Built  and installed OpenMPI like this: (on two nodes)
<br>
./configure --enable-debug --enable-debug-symbols --disable-dlopen &amp;&amp; make
<br>
&amp;&amp; sudo make install
<br>
<p>2. Compiled a tiny hello-world MPI program, mpitest (on both nodes)
<br>
<p>3. Since the modex exchange is a macro now, (it used to be a function call
<br>
before), I have to put the breakpoint inside a line of code in the macro; I
<br>
chose the function mca_base_component_to_string(). I hoped that choosing
<br>
--enable-debug-symbols and --disable-dlopen will make this function
<br>
visible, but may be I am wrong. Do I need to explicitly add a DLSPEC to
<br>
libtools?
<br>
<p>4. I launched gdb like this:
<br>
gdb mpirun
<br>
set args -np 2 -H bigMPI,smallMPI -mca btl tcp,self ./mpitest
<br>
b mca_base_component_to_string
<br>
run
<br>
<p>This told me that the breakpoint is not present in the executable and gdb
<br>
will try to load a shared object if needed; I chose 'yes'.
<br>
However, the breakpoint never triggers and the program runs to completion
<br>
and exits.
<br>
<p>I have two requests:
<br>
1. Please help me understand what I am doing wrong.
<br>
2. Is there a (perhaps a sequence of) switch to 'configure' that will
<br>
create the most debuggable image, while throwing all performance
<br>
optimization out of the window? This would be a great thing for a developer.
<br>
<p>Thank you
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28929/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28930.php">dpchoudh .: "[OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28928.php">Ralph Castain: "Re: [OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
<li><strong>Reply:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
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
