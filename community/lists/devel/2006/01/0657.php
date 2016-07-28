<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 11:13:43 2006" -->
<!-- isoreceived="20060105161343" -->
<!-- sent="Thu, 5 Jan 2006 14:13:27 -0200" -->
<!-- isosent="20060105161327" -->
<!-- name="Leslie Watter" -->
<!-- email="watter_at_[hidden]" -->
<!-- subject="Re:  debugging methods" -->
<!-- id="62f43a280601050813s7c93587fi_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="495EB2D9-857F-446C-BC9B-C228236A6165_at_open-mpi.org" -->
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
<strong>From:</strong> Leslie Watter (<em>watter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 11:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0658.php">Jeff Squyres: "All OMPI resources down Saturday 7 Jan 2006"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Brian Barrett: "Re:  debugging methods"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Jeff Squyres: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Hi all,
<br>
<p>The build system, at least, those things I've discovered, is very good,
<br>
isolating every part of the subsystems (BTL, OPAL, and so on)... Perhaps an
<br>
experience with autoconf and automake before this project make me fell
<br>
comfortable with it.
<br>
<p>Some information that I'm looking for is about the BTL subsystem.
<br>
I'm trying to understand what's the path of the TCP BTL code and how to
<br>
replicate this path to the new implementation of LLC.
<br>
<p>That's because these implementation of LLC acts like a stream socket, which TCP
<br>
is the better example I have ;-)
<br>
<p>Let me explain what I'm looking for: In btl.h we have some comments about the
<br>
inicialization, selection and progress process envolving the entire BTL, but
<br>
I've not found what's the functionality needed to implement a minimal BTL
<br>
module. Understanding this I can understand the whole work done by BTL.
<br>
<p>What I need? To know how and what functions is necessary to perform a minimalist
<br>
implementation of a new btl, registering it and make it usable.
<br>
<p>As I've said in another email, I'm basing mine LLC BTL code on the TCP BTL code,
<br>
then the following examples/questions will came from the TCP code.
<br>
<p><p>Trying to understand the whole sequence (initialization, selection, progress and
<br>
finalization) I've found the following sequence of functions (in TCP) that I've
<br>
separated in the above parts: (please, fell free to correct, I'm just pointing
<br>
what I've experienced):
<br>
<p>1) Inicialization
<br>
<p>component open
<br>
component init
<br>
component create instances
<br>
btl tcp   create
<br>
component create_listen
<br>
btl tcp   setsocket options
<br>
component exchange
<br>
<p>btl tcp   add procs
<br>
endpoint  construct ( executed * number of endpoints )
<br>
btl tcp   del procs
<br>
btl tcp   register
<br>
<p>1.2) component exchange ???
<br>
<p>_____________server? side:
<br>
btl tcp  alloc
<br>
btl tcp  send
<br>
endpoint send
<br>
endpoint start connect
<br>
btl tcp  setsock options
<br>
*_*
<br>
endpoint send handler
<br>
endpoint complete connect
<br>
endpoint send connect ack
<br>
endpoint send blocking
<br>
endpoint recv handler
<br>
endpoint recv connect ack
<br>
endpoint recv blocking
<br>
endpoint connected
<br>
<p>_____________client? side:
<br>
component recv_handler
<br>
component accept
<br>
btl tcp   setsock options
<br>
btl tcp   recv handler
<br>
endpoint  accept
<br>
endpoint  close
<br>
endpoint  send connect ack
<br>
endpoint  send blocking
<br>
endpoint  connected
<br>
<p>1.3) ring stablished, component exchange
<br>
<p>_____________server? side
<br>
_loop
<br>
endpoint     send handler
<br>
btl tcp         frag send
<br>
endpoint     recv handler
<br>
btl tcp        frag recv
<br>
_until process end, goto loop
<br>
<p><p>_____________client? side:
<br>
_loop
<br>
endpoint recv handler
<br>
btl tcp  frag receive
<br>
btl tcp  alloc
<br>
btl tcp  send
<br>
endpoint send
<br>
_until process end, goto loop
<br>
<p>2. transfering data from one node to another
<br>
<p>2.1 tcp packet?? send
<br>
_start
<br>
btl tcp  prepare src
<br>
btl tcp  send
<br>
endpoint send
<br>
btl tcp  frag send
<br>
btl tcp  free
<br>
_end
<br>
<p>2.2 tcp packet?? receive
<br>
_start
<br>
endpoint      recv handler
<br>
btl tcp         frag receive
<br>
_end, looping until packet ends
<br>
<p><p>3)ending connections
<br>
<p>_____________ both sides
<br>
btl tcp  finalize
<br>
_loop
<br>
endpoint close
<br>
endpoint destruct
<br>
_goto loop until there is no endpoint to close
<br>
component  close
<br>
<p><p>This is the sequence I have found executing the TCP BTL code. Please fell free
<br>
to correct the place of sections.
<br>
<p>I'm experiencing some problems with LLC code that can be watched if I know in
<br>
which order the code of BTL TCP occurs.
<br>
<p>Many Thanks, and sorry by the long mail,
<br>
<p>Cheers,
<br>
<p>LEslie
<br>
<p><p><p>2006/1/3, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; In addition to what Brian said, do you have any specific questions
</span><br>
<span class="quotelev1">&gt; about Open MPI's build system, the BTL, etc.?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically: feel free to ping us here about code-level kinds
</span><br>
<span class="quotelev1">&gt; of questions.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0658.php">Jeff Squyres: "All OMPI resources down Saturday 7 Jan 2006"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Brian Barrett: "Re:  debugging methods"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Jeff Squyres: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
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
