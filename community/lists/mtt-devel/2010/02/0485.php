<?
$subject_val = "[MTT devel] extracting mca params";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 10:59:53 2010" -->
<!-- isoreceived="20100212155953" -->
<!-- sent="Fri, 12 Feb 2010 10:59:48 -0500" -->
<!-- isosent="20100212155948" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] extracting mca params" -->
<!-- id="DEAA1140-3743-4225-89DC-9FAD8558381A_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT devel] extracting mca params<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 10:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0486.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see blocks of code like this in MTTGDS.pm and some of the new analyzers:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $mca = $report-&gt;{command};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/^\s*$report-&gt;{launcher}//;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/\s(-n|--n|-np|--np)\s\S+//;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/\s(-rf|--rankfile)\s\S+//;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/\s(-hostfile|--hostfile)\s\S+//;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/\s(-host|--host)\s\S+//;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/\s*(-x)\s\S+//g;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/\s[\S\/\\]*$report-&gt;{test_name}.*//;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/\s\s/ /g;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mca =~ s/^\s+|\s+$//g;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$phase_form-&gt;{mpi_mca} = $mca;
<br>
<p>The problem I ran into is that at least some of the OMPI test suite executables have perl special characters in it (e.g., mpi2c++).  It looks to me like the goal of this block is to obtain a list of the MCA parameters on the command line.  Right?  If so, I think this is a safer method, and will only get mca params (not other random mpirun parameters that don't happen to be listed in the regexps above):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my @params;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $cmd = $report-&gt;{command};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while ($cmd =~ s/\s([\-]*-mca)\s+(\S+)\s+(\S+)\s/ /) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(@params, &quot;$1 $2 $3&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$phase_form-&gt;{mpi_mca} = join(' ', @params);
<br>
<p>That being said, this *is* an Open MPI-specific field.  MTT was supposed to remain MPI-agnostic.  
<br>
<p>Is there a reason you guys didn't use the MPI Details fields &quot;parameters&quot; and &quot;network&quot; for this purpose?  We have an MPI::OMPI module which is perfect for doing OMPI-specific things.  Using the MPI:: modules, you can keep MTT core clean so that we can run other MPI implementations through MTT as well.
<br>
<p>I just committed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/changeset/1348">https://svn.open-mpi.org/trac/mtt/changeset/1348</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/changeset/1349">https://svn.open-mpi.org/trac/mtt/changeset/1349</a>
<br>
<p>that puts the above logic in MTT::Values::Functions::MPI::OMPI::find_mca_params() and converted MTTGDS and all the performance analyzers to call this function.
<br>
<p>I also added a check in MTTGDS.pm to ensure that the analyzer pm has PreReport before trying to call it.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0486.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
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
