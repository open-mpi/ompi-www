<?
$subject_val = "[hwloc-devel] Bring over netloc functionality (#117)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 01:54:01 2014" -->
<!-- isoreceived="20141002055401" -->
<!-- sent="Thu, 02 Oct 2014 07:53:58 +0200" -->
<!-- isosent="20141002055358" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] Bring over netloc functionality (#117)" -->
<!-- id="542CE876.1060908_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="open-mpi/hwloc/pull/117_at_github.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Bring over netloc functionality (#117)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 01:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4257.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-241-g08a664c)"</a>
<li><strong>Previous message:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4278.php">Brice Goglin: "[hwloc-devel] netloc merged in master"</a>
<li><strong>Reply:</strong> <a href="4278.php">Brice Goglin: "[hwloc-devel] netloc merged in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We're working at bringing the netloc functionality inside the main hwloc
<br>
project. Netloc focuses on network locality but it is very
<br>
tightly-coupled with hwloc since we create a global map assembling both
<br>
network and hwloc topologies. More info
<br>
<a href="http://www.open-mpi.org/projects/netloc/">http://www.open-mpi.org/projects/netloc/</a>
<br>
<p>The pull request below adds netloc to the hwloc tree. Most of the
<br>
changes are files moving to subdirectories. Netloc is enabled by default
<br>
when supported (mostly everywhere except on Windows and Solaris), can be
<br>
disabled with --disable-netloc. It builds a separate libnetloc shared
<br>
library (so that we can stabilize the netloc ABI without breaking the
<br>
hwloc ABI, at least for now). If you disable netloc or do not
<br>
include/link with netloc, you get a &quot;normal&quot; hwloc.
<br>
<p>The tree is in a reasonable shape so we'll merge that in hwloc within
<br>
one week unless somebody complains, and this may become hwloc v2.0 or
<br>
whatever in the future.
<br>
<p>There are links to the patch at the end of the mail. The tree may be
<br>
cloned from <a href="https://github.com/jsquyres/hwloc.git">https://github.com/jsquyres/hwloc.git</a> and we have tarballs
<br>
with docs etc at
<br>
<a href="https://ci.inria.fr/hwloc/job/zcustombranch-0-tarball/lastSuccessfulBuild/artifact/">https://ci.inria.fr/hwloc/job/zcustombranch-0-tarball/lastSuccessfulBuild/artifact/</a>
<br>
<p>netloc test files are not included because some of them are big. They
<br>
may go to a separate repository (we may want to do that for hwloc's
<br>
tests/linux/ at some point if 1.7MB is considered too much).
<br>
<p>Brice
<br>
<p><p>-------- Message original --------
<br>
Sujet: 	[hwloc] Bring over netloc functionality (#117)
<br>
Date : 	Wed, 01 Oct 2014 06:22:55 -0700
<br>
De : 	Jeff Squyres &lt;notifications_at_[hidden]&gt;
<br>
R&#195;&#169;pondre &#195;&#160; : 	open-mpi/hwloc
<br>
&lt;reply+i-44562423-01f737b9a538b398c5e59fdd7980a3a0634501cf-827599_at_[hidden]&gt;
<br>
<p>Pour : 	open-mpi/hwloc &lt;hwloc_at_[hidden]&gt;
<br>
<p><p><p>Hwloc 2.0 will include &quot;network locality&quot; functionality as a separate
<br>
library.
<br>
<p>We have re-organized the source tree a bit to accommodate both normal
<br>
hwloc and the new netloc functionality.
<br>
<p>------------------------------------------------------------------------
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can merge this Pull Request by running
<br>
<p>&nbsp;&nbsp;git pull <a href="https://github.com/jsquyres/hwloc">https://github.com/jsquyres/hwloc</a> v2.0
<br>
<p>Or view, comment on, or merge it at:
<br>
<p>&nbsp;&nbsp;<a href="https://github.com/open-mpi/hwloc/pull/117">https://github.com/open-mpi/hwloc/pull/117</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Commit Summary
<br>
<p>&nbsp;&nbsp;* Move src/* to hwloc/ to prepare for netloc addition
<br>
&nbsp;&nbsp;* Add netloc
<br>
&nbsp;&nbsp;* jansson: remove -Wdeclaration-after-statement from AM_CFLAGS
<br>
&nbsp;&nbsp;* jansson: bring the upstream fix for GNU-specific make-ism
<br>
&nbsp;&nbsp;* jansson Makefile.am: remove use of -version-info
<br>
&nbsp;&nbsp;* netloc_gather_ib: fix the parsing of IB port state
<br>
&nbsp;&nbsp;* doc: document that lstopo should be used with cgroup/cpuset
<br>
&nbsp;&nbsp;* doxy: integrate hwloc.doxy and netloc.doxy through a main.doxy
<br>
&nbsp;&nbsp;* doxygen: make sure sub-doxy files are really included
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File Changes
<br>
<p>&nbsp;&nbsp;* *M* .gitignore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-0">https://github.com/open-mpi/hwloc/pull/117/files#diff-0</a>&gt; (226)
<br>
&nbsp;&nbsp;* *M* AUTHORS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-1">https://github.com/open-mpi/hwloc/pull/117/files#diff-1</a>&gt; (32)
<br>
&nbsp;&nbsp;* *M* Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-2">https://github.com/open-mpi/hwloc/pull/117/files#diff-2</a>&gt; (58)
<br>
&nbsp;&nbsp;* *M* README &lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-3">https://github.com/open-mpi/hwloc/pull/117/files#diff-3</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(703)
<br>
&nbsp;&nbsp;* *M* VERSION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-4">https://github.com/open-mpi/hwloc/pull/117/files#diff-4</a>&gt; (5)
<br>
&nbsp;&nbsp;* *M* config/hwloc.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-5">https://github.com/open-mpi/hwloc/pull/117/files#diff-5</a>&gt; (13)
<br>
&nbsp;&nbsp;* *M* config/hwloc_internal.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-6">https://github.com/open-mpi/hwloc/pull/117/files#diff-6</a>&gt; (88)
<br>
&nbsp;&nbsp;* *A* config/netloc-jansson.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-7">https://github.com/open-mpi/hwloc/pull/117/files#diff-7</a>&gt; (134)
<br>
&nbsp;&nbsp;* *A* config/netloc.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-8">https://github.com/open-mpi/hwloc/pull/117/files#diff-8</a>&gt; (118)
<br>
&nbsp;&nbsp;* *M* configure.ac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-9">https://github.com/open-mpi/hwloc/pull/117/files#diff-9</a>&gt; (96)
<br>
&nbsp;&nbsp;* *M* contrib/update-my-copyright.pl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-10">https://github.com/open-mpi/hwloc/pull/117/files#diff-10</a>&gt; (2)
<br>
&nbsp;&nbsp;* *M* doc/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-11">https://github.com/open-mpi/hwloc/pull/117/files#diff-11</a>&gt; (46)
<br>
&nbsp;&nbsp;* *A* doc/README-netloc.infiniband
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-12">https://github.com/open-mpi/hwloc/pull/117/files#diff-12</a>&gt; (84)
<br>
&nbsp;&nbsp;* *A* doc/README-netloc.openflow
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-13">https://github.com/open-mpi/hwloc/pull/117/files#diff-13</a>&gt; (169)
<br>
&nbsp;&nbsp;* *M* doc/doxygen-config.cfg.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-14">https://github.com/open-mpi/hwloc/pull/117/files#diff-14</a>&gt; (12)
<br>
&nbsp;&nbsp;* *M* doc/examples/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-15">https://github.com/open-mpi/hwloc/pull/117/files#diff-15</a>&gt; (2)
<br>
&nbsp;&nbsp;* *M* doc/hwloc.doxy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-16">https://github.com/open-mpi/hwloc/pull/117/files#diff-16</a>&gt; (50)
<br>
&nbsp;&nbsp;* *A* doc/images/netloc-design-small.png
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-17">https://github.com/open-mpi/hwloc/pull/117/files#diff-17</a>&gt; (0)
<br>
&nbsp;&nbsp;* *A* doc/main.doxy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-18">https://github.com/open-mpi/hwloc/pull/117/files#diff-18</a>&gt; (92)
<br>
&nbsp;&nbsp;* *A* doc/netloc.doxy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-19">https://github.com/open-mpi/hwloc/pull/117/files#diff-19</a>&gt; (1168)
<br>
&nbsp;&nbsp;* *R* hwloc/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-20">https://github.com/open-mpi/hwloc/pull/117/files#diff-20</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/base64.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-21">https://github.com/open-mpi/hwloc/pull/117/files#diff-21</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/bind.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-22">https://github.com/open-mpi/hwloc/pull/117/files#diff-22</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/bitmap.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-23">https://github.com/open-mpi/hwloc/pull/117/files#diff-23</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/components.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-24">https://github.com/open-mpi/hwloc/pull/117/files#diff-24</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/diff.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-25">https://github.com/open-mpi/hwloc/pull/117/files#diff-25</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/distances.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-26">https://github.com/open-mpi/hwloc/pull/117/files#diff-26</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/dolib.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-27">https://github.com/open-mpi/hwloc/pull/117/files#diff-27</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/hwloc.dtd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-28">https://github.com/open-mpi/hwloc/pull/117/files#diff-28</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/misc.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-29">https://github.com/open-mpi/hwloc/pull/117/files#diff-29</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/pci-common.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-30">https://github.com/open-mpi/hwloc/pull/117/files#diff-30</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-aix.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-31">https://github.com/open-mpi/hwloc/pull/117/files#diff-31</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-bgq.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-32">https://github.com/open-mpi/hwloc/pull/117/files#diff-32</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-cuda.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-33">https://github.com/open-mpi/hwloc/pull/117/files#diff-33</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-custom.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-34">https://github.com/open-mpi/hwloc/pull/117/files#diff-34</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-darwin.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-35">https://github.com/open-mpi/hwloc/pull/117/files#diff-35</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-fake.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-36">https://github.com/open-mpi/hwloc/pull/117/files#diff-36</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-freebsd.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-37">https://github.com/open-mpi/hwloc/pull/117/files#diff-37</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-gl.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-38">https://github.com/open-mpi/hwloc/pull/117/files#diff-38</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-hpux.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-39">https://github.com/open-mpi/hwloc/pull/117/files#diff-39</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-linux.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-40">https://github.com/open-mpi/hwloc/pull/117/files#diff-40</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-netbsd.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-41">https://github.com/open-mpi/hwloc/pull/117/files#diff-41</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-noos.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-42">https://github.com/open-mpi/hwloc/pull/117/files#diff-42</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-nvml.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-43">https://github.com/open-mpi/hwloc/pull/117/files#diff-43</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-opencl.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-44">https://github.com/open-mpi/hwloc/pull/117/files#diff-44</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-osf.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-45">https://github.com/open-mpi/hwloc/pull/117/files#diff-45</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-pci.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-46">https://github.com/open-mpi/hwloc/pull/117/files#diff-46</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-solaris-chiptype.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-47">https://github.com/open-mpi/hwloc/pull/117/files#diff-47</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-solaris.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-48">https://github.com/open-mpi/hwloc/pull/117/files#diff-48</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-synthetic.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-49">https://github.com/open-mpi/hwloc/pull/117/files#diff-49</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-windows.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-50">https://github.com/open-mpi/hwloc/pull/117/files#diff-50</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-x86.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-51">https://github.com/open-mpi/hwloc/pull/117/files#diff-51</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-xml-libxml.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-52">https://github.com/open-mpi/hwloc/pull/117/files#diff-52</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-xml-nolibxml.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-53">https://github.com/open-mpi/hwloc/pull/117/files#diff-53</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology-xml.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-54">https://github.com/open-mpi/hwloc/pull/117/files#diff-54</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/topology.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-55">https://github.com/open-mpi/hwloc/pull/117/files#diff-55</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* hwloc/traversal.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-56">https://github.com/open-mpi/hwloc/pull/117/files#diff-56</a>&gt; (0)
<br>
&nbsp;&nbsp;* *M* include/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-57">https://github.com/open-mpi/hwloc/pull/117/files#diff-57</a>&gt; (20)
<br>
&nbsp;&nbsp;* *A* include/netloc.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-58">https://github.com/open-mpi/hwloc/pull/117/files#diff-58</a>&gt; (911)
<br>
&nbsp;&nbsp;* *A* include/netloc/dc.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-59">https://github.com/open-mpi/hwloc/pull/117/files#diff-59</a>&gt; (306)
<br>
&nbsp;&nbsp;* *A* include/netloc/map.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-60">https://github.com/open-mpi/hwloc/pull/117/files#diff-60</a>&gt; (540)
<br>
&nbsp;&nbsp;* *A* include/netloc/rename.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-61">https://github.com/open-mpi/hwloc/pull/117/files#diff-61</a>&gt; (14)
<br>
&nbsp;&nbsp;* *A* include/netloc/rename_map.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-62">https://github.com/open-mpi/hwloc/pull/117/files#diff-62</a>&gt; (14)
<br>
&nbsp;&nbsp;* *A* include/private/map.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-63">https://github.com/open-mpi/hwloc/pull/117/files#diff-63</a>&gt; (110)
<br>
&nbsp;&nbsp;* *A* include/private/netloc.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-64">https://github.com/open-mpi/hwloc/pull/117/files#diff-64</a>&gt; (561)
<br>
&nbsp;&nbsp;* *A* netloc.pc.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-65">https://github.com/open-mpi/hwloc/pull/117/files#diff-65</a>&gt; (11)
<br>
&nbsp;&nbsp;* *A* netloc/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-66">https://github.com/open-mpi/hwloc/pull/117/files#diff-66</a>&gt; (63)
<br>
&nbsp;&nbsp;* *A* netloc/README
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-67">https://github.com/open-mpi/hwloc/pull/117/files#diff-67</a>&gt; (61)
<br>
&nbsp;&nbsp;* *A* netloc/api.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-68">https://github.com/open-mpi/hwloc/pull/117/files#diff-68</a>&gt; (182)
<br>
&nbsp;&nbsp;* *A* netloc/data_collect.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-69">https://github.com/open-mpi/hwloc/pull/117/files#diff-69</a>&gt; (768)
<br>
&nbsp;&nbsp;* *A* netloc/data_types.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-70">https://github.com/open-mpi/hwloc/pull/117/files#diff-70</a>&gt; (1107)
<br>
&nbsp;&nbsp;* *A* netloc/export.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-71">https://github.com/open-mpi/hwloc/pull/117/files#diff-71</a>&gt; (353)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/CHANGES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-72">https://github.com/open-mpi/hwloc/pull/117/files#diff-72</a>&gt; (583)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/CMakeLists.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-73">https://github.com/open-mpi/hwloc/pull/117/files#diff-73</a>&gt; (509)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/LICENSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-74">https://github.com/open-mpi/hwloc/pull/117/files#diff-74</a>&gt; (19)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-75">https://github.com/open-mpi/hwloc/pull/117/files#diff-75</a>&gt; (16)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/README.rst
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-76">https://github.com/open-mpi/hwloc/pull/117/files#diff-76</a>&gt; (63)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/config.h.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-77">https://github.com/open-mpi/hwloc/pull/117/files#diff-77</a>&gt; (139)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/configure.ac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-78">https://github.com/open-mpi/hwloc/pull/117/files#diff-78</a>&gt; (108)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/jansson.pc.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-79">https://github.com/open-mpi/hwloc/pull/117/files#diff-79</a>&gt; (10)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-80">https://github.com/open-mpi/hwloc/pull/117/files#diff-80</a>&gt; (30)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/dump.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-81">https://github.com/open-mpi/hwloc/pull/117/files#diff-81</a>&gt; (456)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/error.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-82">https://github.com/open-mpi/hwloc/pull/117/files#diff-82</a>&gt; (63)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/hashtable.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-83">https://github.com/open-mpi/hwloc/pull/117/files#diff-83</a>&gt; (345)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/hashtable.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-84">https://github.com/open-mpi/hwloc/pull/117/files#diff-84</a>&gt; (181)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/hashtable_seed.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-85">https://github.com/open-mpi/hwloc/pull/117/files#diff-85</a>&gt; (278)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/jansson.def
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-86">https://github.com/open-mpi/hwloc/pull/117/files#diff-86</a>&gt; (63)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/jansson.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-87">https://github.com/open-mpi/hwloc/pull/117/files#diff-87</a>&gt; (282)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/jansson_config.h.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-88">https://github.com/open-mpi/hwloc/pull/117/files#diff-88</a>&gt; (39)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/jansson_private.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-89">https://github.com/open-mpi/hwloc/pull/117/files#diff-89</a>&gt; (93)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/load.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-90">https://github.com/open-mpi/hwloc/pull/117/files#diff-90</a>&gt; (1077)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/lookup3.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-91">https://github.com/open-mpi/hwloc/pull/117/files#diff-91</a>&gt; (366)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/memory.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-92">https://github.com/open-mpi/hwloc/pull/117/files#diff-92</a>&gt; (56)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/pack_unpack.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-93">https://github.com/open-mpi/hwloc/pull/117/files#diff-93</a>&gt; (762)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/strbuffer.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-94">https://github.com/open-mpi/hwloc/pull/117/files#diff-94</a>&gt; (116)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/strbuffer.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-95">https://github.com/open-mpi/hwloc/pull/117/files#diff-95</a>&gt; (33)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/strconv.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-96">https://github.com/open-mpi/hwloc/pull/117/files#diff-96</a>&gt; (134)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/utf.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-97">https://github.com/open-mpi/hwloc/pull/117/files#diff-97</a>&gt; (190)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/utf.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-98">https://github.com/open-mpi/hwloc/pull/117/files#diff-98</a>&gt; (27)
<br>
&nbsp;&nbsp;* *A* netloc/jansson/src/value.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-99">https://github.com/open-mpi/hwloc/pull/117/files#diff-99</a>&gt; (966)
<br>
&nbsp;&nbsp;* *A* netloc/lookup_table.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-100">https://github.com/open-mpi/hwloc/pull/117/files#diff-100</a>&gt; (538)
<br>
&nbsp;&nbsp;* *A* netloc/map.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-101">https://github.com/open-mpi/hwloc/pull/117/files#diff-101</a>&gt; (1705)
<br>
&nbsp;&nbsp;* *A* netloc/metadata.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-102">https://github.com/open-mpi/hwloc/pull/117/files#diff-102</a>&gt; (359)
<br>
&nbsp;&nbsp;* *A* netloc/pathfinder.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-103">https://github.com/open-mpi/hwloc/pull/117/files#diff-103</a>&gt; (562)
<br>
&nbsp;&nbsp;* *A* netloc/support.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-104">https://github.com/open-mpi/hwloc/pull/117/files#diff-104</a>&gt; (345)
<br>
&nbsp;&nbsp;* *A* netloc/support.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-105">https://github.com/open-mpi/hwloc/pull/117/files#diff-105</a>&gt; (133)
<br>
&nbsp;&nbsp;* *A* netloc/topology.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-106">https://github.com/open-mpi/hwloc/pull/117/files#diff-106</a>&gt; (99)
<br>
&nbsp;&nbsp;* *M* tests/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-107">https://github.com/open-mpi/hwloc/pull/117/files#diff-107</a>&gt; (123)
<br>
&nbsp;&nbsp;* *A* tests/hwloc/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-108">https://github.com/open-mpi/hwloc/pull/117/files#diff-108</a>&gt; (121)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/cuda.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-109">https://github.com/open-mpi/hwloc/pull/117/files#diff-109</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/cudart.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-110">https://github.com/open-mpi/hwloc/pull/117/files#diff-110</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-111">https://github.com/open-mpi/hwloc/pull/117/files#diff-111</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/README.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-112">https://github.com/open-mpi/hwloc/pull/117/files#diff-112</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/autogen.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-113">https://github.com/open-mpi/hwloc/pull/117/files#diff-113</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/config/README.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-114">https://github.com/open-mpi/hwloc/pull/117/files#diff-114</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/configure.ac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-115">https://github.com/open-mpi/hwloc/pull/117/files#diff-115</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/do_test.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-116">https://github.com/open-mpi/hwloc/pull/117/files#diff-116</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/main.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-117">https://github.com/open-mpi/hwloc/pull/117/files#diff-117</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/embedded/run-embedded-tests.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-118">https://github.com/open-mpi/hwloc/pull/117/files#diff-118</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/gl.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-119">https://github.com/open-mpi/hwloc/pull/117/files#diff-119</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/glibc-sched.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-120">https://github.com/open-mpi/hwloc/pull/117/files#diff-120</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_backends.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-121">https://github.com/open-mpi/hwloc/pull/117/files#diff-121</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_bind.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-122">https://github.com/open-mpi/hwloc/pull/117/files#diff-122</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_bitmap.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-123">https://github.com/open-mpi/hwloc/pull/117/files#diff-123</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_bitmap_first_last_weight.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-124">https://github.com/open-mpi/hwloc/pull/117/files#diff-124</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_bitmap_singlify.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-125">https://github.com/open-mpi/hwloc/pull/117/files#diff-125</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_bitmap_string.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-126">https://github.com/open-mpi/hwloc/pull/117/files#diff-126</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_custom.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-127">https://github.com/open-mpi/hwloc/pull/117/files#diff-127</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_distances.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-128">https://github.com/open-mpi/hwloc/pull/117/files#diff-128</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_cache_covering_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-129">https://github.com/open-mpi/hwloc/pull/117/files#diff-129</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_closest_objs.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-130">https://github.com/open-mpi/hwloc/pull/117/files#diff-130</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_largest_objs_inside_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-131">https://github.com/open-mpi/hwloc/pull/117/files#diff-131</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_last_cpu_location.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-132">https://github.com/open-mpi/hwloc/pull/117/files#diff-132</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_next_obj_covering_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-133">https://github.com/open-mpi/hwloc/pull/117/files#diff-133</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_obj_below_array_by_type.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-134">https://github.com/open-mpi/hwloc/pull/117/files#diff-134</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_obj_covering_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-135">https://github.com/open-mpi/hwloc/pull/117/files#diff-135</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_obj_inside_cpuset.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-136">https://github.com/open-mpi/hwloc/pull/117/files#diff-136</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_get_shared_cache_covering_obj.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-137">https://github.com/open-mpi/hwloc/pull/117/files#diff-137</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_groups.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-138">https://github.com/open-mpi/hwloc/pull/117/files#diff-138</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_groups2.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-139">https://github.com/open-mpi/hwloc/pull/117/files#diff-139</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_insert_misc.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-140">https://github.com/open-mpi/hwloc/pull/117/files#diff-140</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_iodevs.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-141">https://github.com/open-mpi/hwloc/pull/117/files#diff-141</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_is_thissystem.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-142">https://github.com/open-mpi/hwloc/pull/117/files#diff-142</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_list_components.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-143">https://github.com/open-mpi/hwloc/pull/117/files#diff-143</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_obj_infos.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-144">https://github.com/open-mpi/hwloc/pull/117/files#diff-144</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_object_userdata.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-145">https://github.com/open-mpi/hwloc/pull/117/files#diff-145</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_pci_backend.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-146">https://github.com/open-mpi/hwloc/pull/117/files#diff-146</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_synthetic.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-147">https://github.com/open-mpi/hwloc/pull/117/files#diff-147</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_topology_diff.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-148">https://github.com/open-mpi/hwloc/pull/117/files#diff-148</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_topology_dup.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-149">https://github.com/open-mpi/hwloc/pull/117/files#diff-149</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_topology_restrict.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-150">https://github.com/open-mpi/hwloc/pull/117/files#diff-150</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/hwloc_type_depth.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-151">https://github.com/open-mpi/hwloc/pull/117/files#diff-151</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/intel-mic.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-152">https://github.com/open-mpi/hwloc/pull/117/files#diff-152</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux-libnuma.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-153">https://github.com/open-mpi/hwloc/pull/117/files#diff-153</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/128ia64-17n4s2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-154">https://github.com/open-mpi/hwloc/pull/117/files#diff-154</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/128ia64-17n4s2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-155">https://github.com/open-mpi/hwloc/pull/117/files#diff-155</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-4n4c-cgroup-distance-merge.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-156">https://github.com/open-mpi/hwloc/pull/117/files#diff-156</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-4n4c-cgroup-distance-merge.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-157">https://github.com/open-mpi/hwloc/pull/117/files#diff-157</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-4n4c-cgroup-distance-merge.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-158">https://github.com/open-mpi/hwloc/pull/117/files#diff-158</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-159">https://github.com/open-mpi/hwloc/pull/117/files#diff-159</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-160">https://github.com/open-mpi/hwloc/pull/117/files#diff-160</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets.xml.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-161">https://github.com/open-mpi/hwloc/pull/117/files#diff-161</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets.xml.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-162">https://github.com/open-mpi/hwloc/pull/117/files#diff-162</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets.xml.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-163">https://github.com/open-mpi/hwloc/pull/117/files#diff-163</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets_noadmin.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-164">https://github.com/open-mpi/hwloc/pull/117/files#diff-164</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets_noadmin.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-165">https://github.com/open-mpi/hwloc/pull/117/files#diff-165</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c-cpusets_noadmin.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-166">https://github.com/open-mpi/hwloc/pull/117/files#diff-166</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-167">https://github.com/open-mpi/hwloc/pull/117/files#diff-167</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16amd64-8n2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-168">https://github.com/open-mpi/hwloc/pull/117/files#diff-168</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-2m4c2t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-169">https://github.com/open-mpi/hwloc/pull/117/files#diff-169</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-2m4c2t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-170">https://github.com/open-mpi/hwloc/pull/117/files#diff-170</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-171">https://github.com/open-mpi/hwloc/pull/117/files#diff-171</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-172">https://github.com/open-mpi/hwloc/pull/117/files#diff-172</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines.xml.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-173">https://github.com/open-mpi/hwloc/pull/117/files#diff-173</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines.xml.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-174">https://github.com/open-mpi/hwloc/pull/117/files#diff-174</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines.xml.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-175">https://github.com/open-mpi/hwloc/pull/117/files#diff-175</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines_noadmin.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-176">https://github.com/open-mpi/hwloc/pull/117/files#diff-176</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines_noadmin.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-177">https://github.com/open-mpi/hwloc/pull/117/files#diff-177</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t-offlines_noadmin.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-178">https://github.com/open-mpi/hwloc/pull/117/files#diff-178</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-179">https://github.com/open-mpi/hwloc/pull/117/files#diff-179</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-180">https://github.com/open-mpi/hwloc/pull/117/files#diff-180</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t.xml.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-181">https://github.com/open-mpi/hwloc/pull/117/files#diff-181</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t.xml.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-182">https://github.com/open-mpi/hwloc/pull/117/files#diff-182</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t.xml.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-183">https://github.com/open-mpi/hwloc/pull/117/files#diff-183</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t_merge.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-184">https://github.com/open-mpi/hwloc/pull/117/files#diff-184</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t_merge.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-185">https://github.com/open-mpi/hwloc/pull/117/files#diff-185</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t_merge.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-186">https://github.com/open-mpi/hwloc/pull/117/files#diff-186</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t_ncaches.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-187">https://github.com/open-mpi/hwloc/pull/117/files#diff-187</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t_ncaches.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-188">https://github.com/open-mpi/hwloc/pull/117/files#diff-188</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2c2t_ncaches.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-189">https://github.com/open-mpi/hwloc/pull/117/files#diff-189</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2ca2c-cpusetreorder.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-190">https://github.com/open-mpi/hwloc/pull/117/files#diff-190</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16em64t-4s2ca2c-cpusetreorder.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-191">https://github.com/open-mpi/hwloc/pull/117/files#diff-191</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16ia64-8n2s.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-192">https://github.com/open-mpi/hwloc/pull/117/files#diff-192</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/16ia64-8n2s.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-193">https://github.com/open-mpi/hwloc/pull/117/files#diff-193</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/1alpha.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-194">https://github.com/open-mpi/hwloc/pull/117/files#diff-194</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/1alpha.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-195">https://github.com/open-mpi/hwloc/pull/117/files#diff-195</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/20s390-2g6s4c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-196">https://github.com/open-mpi/hwloc/pull/117/files#diff-196</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/20s390-2g6s4c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-197">https://github.com/open-mpi/hwloc/pull/117/files#diff-197</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/24em64t-2n6c2t+2mic.olddriver.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-198">https://github.com/open-mpi/hwloc/pull/117/files#diff-198</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/24em64t-2n6c2t+2mic.olddriver.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-199">https://github.com/open-mpi/hwloc/pull/117/files#diff-199</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/24em64t-2n6c2t+2mic.olddriver.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-200">https://github.com/open-mpi/hwloc/pull/117/files#diff-200</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ia64-64n2s2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-201">https://github.com/open-mpi/hwloc/pull/117/files#diff-201</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ia64-64n2s2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-202">https://github.com/open-mpi/hwloc/pull/117/files#diff-202</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t-nocache.exclude
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-203">https://github.com/open-mpi/hwloc/pull/117/files#diff-203</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t-nocache.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-204">https://github.com/open-mpi/hwloc/pull/117/files#diff-204</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t-nocache.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-205">https://github.com/open-mpi/hwloc/pull/117/files#diff-205</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t-nosys.exclude
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-206">https://github.com/open-mpi/hwloc/pull/117/files#diff-206</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t-nosys.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-207">https://github.com/open-mpi/hwloc/pull/117/files#diff-207</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t-nosys.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-208">https://github.com/open-mpi/hwloc/pull/117/files#diff-208</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-209">https://github.com/open-mpi/hwloc/pull/117/files#diff-209</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/256ppc-8n8s4t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-210">https://github.com/open-mpi/hwloc/pull/117/files#diff-210</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/28em64t-2s2n7c-buggycoresiblings.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-211">https://github.com/open-mpi/hwloc/pull/117/files#diff-211</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/28em64t-2s2n7c-buggycoresiblings.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-212">https://github.com/open-mpi/hwloc/pull/117/files#diff-212</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2amd64-2n.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-213">https://github.com/open-mpi/hwloc/pull/117/files#diff-213</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2amd64-2n.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-214">https://github.com/open-mpi/hwloc/pull/117/files#diff-214</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2arm-2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-215">https://github.com/open-mpi/hwloc/pull/117/files#diff-215</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2arm-2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-216">https://github.com/open-mpi/hwloc/pull/117/files#diff-216</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2c-nohugepage.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-217">https://github.com/open-mpi/hwloc/pull/117/files#diff-217</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2c-nohugepage.xml.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-218">https://github.com/open-mpi/hwloc/pull/117/files#diff-218</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2c-nohugepage.xml.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-219">https://github.com/open-mpi/hwloc/pull/117/files#diff-219</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2c-nohugepage.xml.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-220">https://github.com/open-mpi/hwloc/pull/117/files#diff-220</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2t-hugepagesizecount.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-221">https://github.com/open-mpi/hwloc/pull/117/files#diff-221</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2t-hugepagesizecount.xml.env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-222">https://github.com/open-mpi/hwloc/pull/117/files#diff-222</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2t-hugepagesizecount.xml.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-223">https://github.com/open-mpi/hwloc/pull/117/files#diff-223</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2t-hugepagesizecount.xml.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-224">https://github.com/open-mpi/hwloc/pull/117/files#diff-224</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2i386-2t-hugepagesizecount.xml.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-225">https://github.com/open-mpi/hwloc/pull/117/files#diff-225</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2ps3-2t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-226">https://github.com/open-mpi/hwloc/pull/117/files#diff-226</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2ps3-2t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-227">https://github.com/open-mpi/hwloc/pull/117/files#diff-227</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2s390-2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-228">https://github.com/open-mpi/hwloc/pull/117/files#diff-228</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/2s390-2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-229">https://github.com/open-mpi/hwloc/pull/117/files#diff-229</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32amd64-4s2n4c-cgroup.env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-230">https://github.com/open-mpi/hwloc/pull/117/files#diff-230</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32amd64-4s2n4c-cgroup.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-231">https://github.com/open-mpi/hwloc/pull/117/files#diff-231</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32amd64-4s2n4c-cgroup.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-232">https://github.com/open-mpi/hwloc/pull/117/files#diff-232</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32amd64-4s2n4c-cgroup.xml.env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-233">https://github.com/open-mpi/hwloc/pull/117/files#diff-233</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32amd64-4s2n4c-cgroup.xml.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-234">https://github.com/open-mpi/hwloc/pull/117/files#diff-234</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32amd64-4s2n4c-cgroup.xml.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-235">https://github.com/open-mpi/hwloc/pull/117/files#diff-235</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32amd64-4s2n4c-cgroup.xml.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-236">https://github.com/open-mpi/hwloc/pull/117/files#diff-236</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32em64t-2n8c+1mic.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-237">https://github.com/open-mpi/hwloc/pull/117/files#diff-237</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32em64t-2n8c+1mic.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-238">https://github.com/open-mpi/hwloc/pull/117/files#diff-238</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32em64t-2n8c+1mic.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-239">https://github.com/open-mpi/hwloc/pull/117/files#diff-239</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32ppc-4n4c2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-240">https://github.com/open-mpi/hwloc/pull/117/files#diff-240</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/32ppc-4n4c2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-241">https://github.com/open-mpi/hwloc/pull/117/files#diff-241</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/40intel64-2g2n4c+pci.env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-242">https://github.com/open-mpi/hwloc/pull/117/files#diff-242</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/40intel64-2g2n4c+pci.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-243">https://github.com/open-mpi/hwloc/pull/117/files#diff-243</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/40intel64-2g2n4c+pci.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-244">https://github.com/open-mpi/hwloc/pull/117/files#diff-244</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/40intel64-2g2n4c+pci.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-245">https://github.com/open-mpi/hwloc/pull/117/files#diff-245</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/40intel64-4n10c+pci-conflicts.env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-246">https://github.com/open-mpi/hwloc/pull/117/files#diff-246</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/40intel64-4n10c+pci-conflicts.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-247">https://github.com/open-mpi/hwloc/pull/117/files#diff-247</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/40intel64-4n10c+pci-conflicts.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-248">https://github.com/open-mpi/hwloc/pull/117/files#diff-248</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/48amd64-4d2n6c-sparse.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-249">https://github.com/open-mpi/hwloc/pull/117/files#diff-249</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/48amd64-4d2n6c-sparse.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-250">https://github.com/open-mpi/hwloc/pull/117/files#diff-250</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4em64t-2c2t-ignore-reorder.options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-251">https://github.com/open-mpi/hwloc/pull/117/files#diff-251</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4em64t-2c2t-ignore-reorder.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-252">https://github.com/open-mpi/hwloc/pull/117/files#diff-252</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4em64t-2c2t-ignore-reorder.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-253">https://github.com/open-mpi/hwloc/pull/117/files#diff-253</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4ia64-4s.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-254">https://github.com/open-mpi/hwloc/pull/117/files#diff-254</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4ia64-4s.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-255">https://github.com/open-mpi/hwloc/pull/117/files#diff-255</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4ppc-4c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-256">https://github.com/open-mpi/hwloc/pull/117/files#diff-256</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4ppc-4c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-257">https://github.com/open-mpi/hwloc/pull/117/files#diff-257</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4qs22-2s2t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-258">https://github.com/open-mpi/hwloc/pull/117/files#diff-258</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/4qs22-2s2t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-259">https://github.com/open-mpi/hwloc/pull/117/files#diff-259</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/64amd64-4s2n4ca2co.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-260">https://github.com/open-mpi/hwloc/pull/117/files#diff-260</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/64amd64-4s2n4ca2co.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-261">https://github.com/open-mpi/hwloc/pull/117/files#diff-261</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/64fake-4n2s2ca2c2t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-262">https://github.com/open-mpi/hwloc/pull/117/files#diff-262</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/64fake-4n2s2ca2c2t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-263">https://github.com/open-mpi/hwloc/pull/117/files#diff-263</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8amd64-4n2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-264">https://github.com/open-mpi/hwloc/pull/117/files#diff-264</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8amd64-4n2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-265">https://github.com/open-mpi/hwloc/pull/117/files#diff-265</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-2s2ca2c-buggynuma.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-266">https://github.com/open-mpi/hwloc/pull/117/files#diff-266</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-2s2ca2c-buggynuma.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-267">https://github.com/open-mpi/hwloc/pull/117/files#diff-267</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-2s2ca2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-268">https://github.com/open-mpi/hwloc/pull/117/files#diff-268</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-2s2ca2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-269">https://github.com/open-mpi/hwloc/pull/117/files#diff-269</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-2s4c-heterogeneous.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-270">https://github.com/open-mpi/hwloc/pull/117/files#diff-270</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-2s4c-heterogeneous.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-271">https://github.com/open-mpi/hwloc/pull/117/files#diff-271</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-4c2t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-272">https://github.com/open-mpi/hwloc/pull/117/files#diff-272</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8em64t-4c2t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-273">https://github.com/open-mpi/hwloc/pull/117/files#diff-273</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8ia64-2n2s2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-274">https://github.com/open-mpi/hwloc/pull/117/files#diff-274</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8ia64-2n2s2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-275">https://github.com/open-mpi/hwloc/pull/117/files#diff-275</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8ia64-2s2c2t.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-276">https://github.com/open-mpi/hwloc/pull/117/files#diff-276</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8ia64-2s2c2t.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-277">https://github.com/open-mpi/hwloc/pull/117/files#diff-277</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8ia64-4s2c.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-278">https://github.com/open-mpi/hwloc/pull/117/files#diff-278</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/8ia64-4s2c.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-279">https://github.com/open-mpi/hwloc/pull/117/files#diff-279</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/96em64t-4n4d3ca2co-forcecpuinfo.env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-280">https://github.com/open-mpi/hwloc/pull/117/files#diff-280</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/96em64t-4n4d3ca2co-forcecpuinfo.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-281">https://github.com/open-mpi/hwloc/pull/117/files#diff-281</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/96em64t-4n4d3ca2co-forcecpuinfo.source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-282">https://github.com/open-mpi/hwloc/pull/117/files#diff-282</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/96em64t-4n4d3ca2co.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-283">https://github.com/open-mpi/hwloc/pull/117/files#diff-283</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/96em64t-4n4d3ca2co.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-284">https://github.com/open-mpi/hwloc/pull/117/files#diff-284</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-285">https://github.com/open-mpi/hwloc/pull/117/files#diff-285</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/README
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-286">https://github.com/open-mpi/hwloc/pull/117/files#diff-286</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/gather/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-287">https://github.com/open-mpi/hwloc/pull/117/files#diff-287</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/gather/test-gather-topology.sh.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-288">https://github.com/open-mpi/hwloc/pull/117/files#diff-288</a>&gt; (6)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/hwloc-gather-topology.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-289">https://github.com/open-mpi/hwloc/pull/117/files#diff-289</a>&gt; (1)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/linux/test-topology.sh.in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-290">https://github.com/open-mpi/hwloc/pull/117/files#diff-290</a>&gt; (8)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/myriexpress.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-291">https://github.com/open-mpi/hwloc/pull/117/files#diff-291</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/nvml.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-292">https://github.com/open-mpi/hwloc/pull/117/files#diff-292</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/opencl.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-293">https://github.com/open-mpi/hwloc/pull/117/files#diff-293</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/openfabrics-verbs.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-294">https://github.com/open-mpi/hwloc/pull/117/files#diff-294</a>&gt; (0)
<br>
&nbsp;&nbsp;* *A* tests/hwloc/ports/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-295">https://github.com/open-mpi/hwloc/pull/117/files#diff-295</a>&gt; (165)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/ports/include/aix/procinfo.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-296">https://github.com/open-mpi/hwloc/pull/117/files#diff-296</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/ports/include/aix/sys/processor.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-297">https://github.com/open-mpi/hwloc/pull/117/files#diff-297</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/ports/include/aix/sys/rset.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-298">https://github.com/open-mpi/hwloc/pull/117/files#diff-298</a>&gt; (0)
<br>
&nbsp;&nbsp;* *R* tests/hwloc/ports/include/aix/sys/systemcfg.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-299">https://github.com/open-mpi/hwloc/pull/117/files#diff-299</a>&gt; (0)
<br>
&nbsp;&nbsp;* *I* tests/hwloc/ports/include/aix/sys/thread.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="https://github.com/open-mpi/hwloc/pull/117/files#diff-300">https://github.com/open-mpi/hwloc/pull/117/files#diff-300</a>&gt; (0)
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patch Links:
<br>
<p>&nbsp;&nbsp;* <a href="https://github.com/open-mpi/hwloc/pull/117.patch">https://github.com/open-mpi/hwloc/pull/117.patch</a>
<br>
&nbsp;&nbsp;* <a href="https://github.com/open-mpi/hwloc/pull/117.diff">https://github.com/open-mpi/hwloc/pull/117.diff</a>
<br>
<p>&#226;&#128;&#148;
<br>
Reply to this email directly or view it on GitHub
<br>
&lt;<a href="https://github.com/open-mpi/hwloc/pull/117">https://github.com/open-mpi/hwloc/pull/117</a>&gt;.
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4257.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-241-g08a664c)"</a>
<li><strong>Previous message:</strong> <a href="4255.php">Brice Goglin: "Re: [hwloc-devel] hwloc version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4278.php">Brice Goglin: "[hwloc-devel] netloc merged in master"</a>
<li><strong>Reply:</strong> <a href="4278.php">Brice Goglin: "[hwloc-devel] netloc merged in master"</a>
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
