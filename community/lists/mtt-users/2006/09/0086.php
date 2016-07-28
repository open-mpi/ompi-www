<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  8 14:02:06 2006" -->
<!-- isoreceived="20060908180206" -->
<!-- sent="Fri, 8 Sep 2006 14:02:05 -0400 (EDT)" -->
<!-- isosent="20060908180205" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT users] Distinct Steps" -->
<!-- id="49574.129.79.245.233.1157738525.squirrel_at_www.osl.iu.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-08 14:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Ethan A Mallove - Sun Microsystems: "Re: [MTT users] How's it going?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Reply:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a way to separate the Compile Phase with the Testing Phase? I
<br>
thought there was but it's not obvious to me how to do that.
<br>
<p>Say I want to build 2 branches (trunk, v1.2) on an allocation of 1 node.
<br>
Once that is complete then I want to run the tests on an allocation of N
<br>
nodes.
<br>
<p>How to I tell the tests what branches to iterate over and where they are
<br>
located?
<br>
<p>The script I am trying to create would essentually do the following:
<br>
&nbsp;srun -N 1 -b mtt-build-phase
<br>
&nbsp;wait for it to complete
<br>
&nbsp;srun -N 16 -b mtt-testing-phase
<br>
<p>or something to that effect so we don't allocate all 16 machines and let
<br>
them idle while the tests are building.
<br>
<p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Ethan A Mallove - Sun Microsystems: "Re: [MTT users] How's it going?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Reply:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
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
