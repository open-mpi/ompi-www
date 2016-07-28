<?
$subject_val = "Re: [OMPI users] Python bindings for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 10:05:09 2009" -->
<!-- isoreceived="20090714140509" -->
<!-- sent="Tue, 14 Jul 2009 10:04:27 -0400" -->
<!-- isosent="20090714140427" -->
<!-- name="Evans, Thomas M." -->
<!-- email="evanstm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Python bindings for openmpi" -->
<!-- id="C68208AB.4D31%evanstm_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Python bindings for openmpi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Python bindings for openmpi<br>
<strong>From:</strong> Evans, Thomas M. (<em>evanstm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 10:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9949.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Thanks for info.  I've looked at a bunch of different options, but have decided on the following course.  Basically, my first attempt was to use SWIG (we use swig to assemble our python bindings) to put the following code in all of our py modules:
<br>
<p>%pythoncode %{
<br>
import sys, dl
<br>
sys.setdlopenflags(sys.getdlopenflags() | dl.RTLD_GLOBAL)
<br>
%}
<br>
<p>In general, this works.  However, for one set of our bindings a module was being opened before this code was inserted.  (Unfortunately, I couldn't figure out a way to tell SWIG to insert this code at the very top of a .py file).  So, plan B was to use a post-process script.  After building the .py file, I use a script to place the lines
<br>
<p>import sys, dl
<br>
sys.setdlopenflags(sys.getdlopenflags() | dl.RTLD_GLOBAL)
<br>
<p>at the very top of the .py file.  The script follows below.  In my build system, I have the following target rules:
<br>
<p>module.cc module.py: module.i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$(SWIG) -outdir ${curdir} -o $@ -python -c++ $&lt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$(SWIGLD) module.py
<br>
<p>here SWIGLD is my post-process script included at the end of this email.
<br>
<p>Thanks for the help.  Hope this information is useful to any who might have encountered this issue.
<br>
<p>Tom
<br>
<p>________________________________
<br>
<p>swigld.py
<br>
<p>import os, sys
<br>
<p>##---------------------------------------------------------------------------##
<br>
<p>line0=&quot;## Set dlopen() to put all symbols in global space; needed for openmpi\n&quot;
<br>
line1=&quot;import sys, dl\n&quot;
<br>
line2=&quot;sys.setdlopenflags(sys.getdlopenflags() | dl.RTLD_GLOBAL)\n\n&quot;
<br>
<p>filename = sys.argv[1] + &quot;.temp&quot;
<br>
<p>pyfile   = open(filename, 'w')
<br>
origfile = open(sys.argv[1], 'r')
<br>
<p>lines = origfile.readlines()
<br>
origfile.close()
<br>
<p>pyfile.write(line0)
<br>
pyfile.write(line1)
<br>
pyfile.write(line2)
<br>
pyfile.writelines(lines)
<br>
<p>pyfile.close()
<br>
<p>os.rename(filename, sys.argv[1])
<br>
<p><pre>
--
Tom Evans
Radiation Transport and Shielding
Nuclear Science and Technology Division
------------------------------------------------
(865) 576-3535     Oak Ridge National Laboratory
(865) 574-9619 fax PO Box 2008 MS6172
evanstm_at_[hidden]   Oak Ridge, TN 37831-6170
www.ornl.gov/sci/radiation_transport_criticality
------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9949.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
