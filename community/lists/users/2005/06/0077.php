<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 20:34:47 2005" -->
<!-- isoreceived="20050616013447" -->
<!-- sent="Wed, 15 Jun 2005 18:34:34 -0700 (PDT)" -->
<!-- isosent="20050616013434" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions on status" -->
<!-- id="20050616013434.151.qmail_at_web31511.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[O-MPI users] Questions on status" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-15 20:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Bogdan Costescu: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Maybe in reply to:</strong> <a href="0053.php">Jonathan Day: "[O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0080.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0080.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Phew! I'd no idea my questions would create nearly
<br>
that kind of level of response on the list. I should
<br>
post more often! :)
<br>
<p>Anyways, here are a few suggestions that might - just
<br>
might - work around some of the problems that have
<br>
been mentioned:
<br>
<p>1. Publish the stable header files early, or fragments
<br>
thereof
<br>
<p>People don't need the finished code to start
<br>
developing against your API, all they really need is a
<br>
list of prototypes. After all, we were all taught to
<br>
design first and then implement, right? :)
<br>
<p>So long as people know what the function names are,
<br>
what sorts of parameters are desired, and what
<br>
constants are declared. They don't even need the
<br>
values of constants, if the code is correctly written,
<br>
just the names would be sufficient.
<br>
<p>This gives developers a head-start on coding, but
<br>
would not imperil the publishing value, and would not
<br>
give the inevitable idiots code that may not work as
<br>
expected.
<br>
<p><p>2. Parallel Trees
<br>
<p>What I am thinking of here is something akin to Andrew
<br>
Morton's or Alan Cox' patch series for Linux. You have
<br>
the &quot;official&quot; Open-MPI, and then you have something
<br>
that contains all kinds of bits and bobs that aren't
<br>
stable, aren't validated, and may never be included in
<br>
the official release, but which would still be of
<br>
interest to researchers.
<br>
<p>What would this require? Probably nothing, on your
<br>
part, as something like this can be done perfectly
<br>
well by independent volunteers, but could just as well
<br>
be done by someone you designate. All they would do is
<br>
take suggested patches and assemble a workable
<br>
mega-patch, which developers can then choose to patch
<br>
the official source tree with or not as they desire.
<br>
<p>What's in it for you? Well, it means that suggestions
<br>
you're not sure about but look intriguing can be
<br>
&quot;tested&quot; without being officially live. If the idea
<br>
works, it'll be obvious enough, soon enough, and you
<br>
can port it across.
<br>
<p>This means you don't have to be absolutely rigid on
<br>
accepting or rejecting patches, because you then have
<br>
a pile you can decide on later, but which (in the
<br>
meantime) are subject to scrutiny and testing.
<br>
<p><p>3. Own Your Code
<br>
<p>It is hard to prove ownership, in a digital age, but
<br>
not completely impossible. For each function, you want
<br>
to generate a SHA-1 hash of the source and of the
<br>
binary (using default compiler options). You then do
<br>
likewise for each source file and object file and then
<br>
for each compiled program and library.
<br>
<p>Most pirates and plagarists are lazy. It is very
<br>
unlikely they would go through every single function,
<br>
even to make the trivial change needed to alter the
<br>
hash values.
<br>
<p>What you have, though, is a comprehensive,
<br>
multi-dimensional fingerprint of the entire project.
<br>
But a fingerprint that, if ANY component matches with
<br>
the original, is a strong indicator of theft.
<br>
<p>You could do something like this with a relatively
<br>
simple script, you publish the hash values, and let
<br>
the community not only contribute to your work but
<br>
also contribute to policing against theft.
<br>
<p>(There have been plenty of incidents of theft of GPLed
<br>
code, where this was discovered by users and reported,
<br>
where the FSF might never have known about the problem
<br>
otherwise.)
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Bogdan Costescu: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Maybe in reply to:</strong> <a href="0053.php">Jonathan Day: "[O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0080.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0080.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
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
