<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 29 03:01:41 2007" -->
<!-- isoreceived="20070329070141" -->
<!-- sent="Thu, 29 Mar 2007 00:01:34 -0700 (PDT)" -->
<!-- isosent="20070329070134" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="[OMPI devel] . always in the PATH" -->
<!-- id="Pine.LNX.4.60.0703282327350.28701_at_baily.cs.ubc.ca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-29 03:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1386.php">pooja_at_[hidden]: "[OMPI devel] Hi!! need to find internal state changes"</a>
<li><strong>Previous message:</strong> <a href="1384.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1388.php">Jeff Squyres: "Re: [OMPI devel] . always in the PATH"</a>
<li><strong>Reply:</strong> <a href="1388.php">Jeff Squyres: "Re: [OMPI devel] . always in the PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hey,
<br>
<p>I just had a question (and potential bug) about the expected behavior in 
<br>
mpirun...  I saw it in 1.1.5 and just saw that it still occurs in 1.2.
<br>
<p>I'll illustrate with a (seemingly) silly example.
<br>
<p>Say in your $HOME you have a sh script named testecho that just has
<br>
<p>echo &quot;Saying hi&quot;
<br>
<p>...as its body.  If &quot;.&quot; (nor $HOME) isn't in your $PATH then of course 
<br>
typing...
<br>
<p>[~]$ testecho
<br>
-bash: testecho: command not found
<br>
<p>...returns an error.
<br>
<p>Now say my $HOME is mounted across two machines and these two machines are 
<br>
in a hostfile named &quot;hostfile.openmpi&quot;.  Even if &quot;.&quot; isn't in the PATH on 
<br>
neither machine (nor $HOME), running mpirun seems to place &quot;.&quot; in the 
<br>
PATH:
<br>
<p>[~]$ mpirun --hostfile ~/hostfile.openmpi -np 2 testecho
<br>
Saying hi
<br>
Saying hi
<br>
<p>The funny thing is the following returns the error that it's not found:
<br>
<p>[~]$ mpirun --hostfile ~/hostfile.openmpi -np 2 which testecho
<br>
which: no testecho in &lt;snip&gt; my PATH without &quot;.&quot; in it &lt;/snip&gt;
<br>
which: no testecho in &lt;snip&gt; my PATH without &quot;.&quot; in it &lt;/snip&gt;
<br>
<p><p>I know this seems pedantic but I just wanted whether or not these should 
<br>
differ like this or if this is expected behavior, and thought I'd point it 
<br>
out in case it was not.
<br>
<p>One could say this would never happen but I can imagine a time and place 
<br>
where it might affect something...  who knows?
<br>
<p>In a our test setup, we noticed that MPICH2 wasn't running our tests and 
<br>
Open MPI was and it ended up being because of this issue (where Open MPI 
<br>
was putting &quot;.&quot; into the PATH (or we forgot to put &quot;.&quot; into the PATH :-))...
<br>
<p>... but who knows, maybe your setup deliberately didn't have &quot;.&quot; in it, 
<br>
and you WANTED an error message if some particular program was in &quot;.&quot; but 
<br>
no where else in the PATH...
<br>
<p>What should be the expected behavior?  My vague guess is that the $PATH 
<br>
should be followed strictly (as &quot;which&quot; does) and I should be forced 
<br>
to run with &quot;./testecho&quot;, if I really want this great program to run... 
<br>
but I could be convinced otherwise.
<br>
<p>brad
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1386.php">pooja_at_[hidden]: "[OMPI devel] Hi!! need to find internal state changes"</a>
<li><strong>Previous message:</strong> <a href="1384.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1388.php">Jeff Squyres: "Re: [OMPI devel] . always in the PATH"</a>
<li><strong>Reply:</strong> <a href="1388.php">Jeff Squyres: "Re: [OMPI devel] . always in the PATH"</a>
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
