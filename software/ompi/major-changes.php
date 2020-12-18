<?php
  $topdir = "../..";
  $title = "Open MPI: Major User-Noticeable Changes Across Major Release Series";
  include_once("$topdir/includes/header.inc");
?>

The following are major user-noticeable changes across the major
releases of Open MPI.  Specifically, <em>these are changes that may
present an incompatibility vs. a prior version of Open MPI, or cause
some other type of user-noticeable change in behavior.</em>

<h2>v4.1.x series</h2>

<p>The v4.1.x series introduced the following major feature
enhancements compared to the v4.0.x series:</p>

<p><ol>

<li> The "OMPIO" module is now the default module for the MPI-IO APIs
on <em>all</em> filesystems -- including Lustre.

<p> Prior to v4.1.0, OMPI was the default for all filesystems
<em>except</em> Lustre (and the "ROMIO" module was the default for
Lustre).</p></li>

<!-- ------------------- -->

<li> AVX support was added for MPI collective reduction operations.</li>

<p></p>

<!-- ------------------- -->

<li> Open MPI v4.1.x is ABI compatible with Open MPI 4.0.x.</li>

</ol></p>

<!-- =================== -->

<p><hr></p>

<h2>v4.0.x series</h2>

<p>The v4.0.x series introduced the following major changes compared
to the v3.1.x series:</p>

<p><ol>

<!-- ------------------- -->

<li> Legacy MPI-1 symbols that were deprecated in MPI-2.0 in 1996 and
then deleted from the MPI-3.0 specification in 2012 are no longer
prototyped in <code>mpi.h</code> by default.  <strong>This will almost
certainly cause some legacy MPI applications to fail to
compile.</strong>

<p> <strong><font color="red">DO NOT FEAR!</font></strong> It is easy
to fix such issues.  <a href="<?php print($topdir);
?>/faq/?category=mpi-removed">See this FAQ category for more
information</a>, including:</p>

<p><ul>
    <li>How to upgrade your application to no longer use these legacy
    symbols, and/or what to ask your MPI application provider to do to
    update their MPI application.</li>

    <li>How to re-enable these legacy MPI prototypes in Open MPI.
    <STRONG>WARNING:</STRONG> <em>These legacy symbols may disappear in a
    future major release series of Open MPI!</em></li>
</ul></p>
</li>

<!-- ------------------- -->

<li> The use of InfiniBand with the <code>openib</code> BTL is now
deprecated; the <a href="http://www.openucx.org/">UCX</a> PML is now
the preferred method of InfiniBand support.

<p><ul>

    <li><a href="<?php print($topdir);
    ?>/faq/?category=building#build-p2p">See this FAQ item</a> for
    information on how to build Open MPI with UCX support.</li>

    <li><a href="<?php print($topdir);
    ?>/faq/?category=openfabrics#run-ucx">See this FAQ item</a> for
    information on how to run Open MPI jobs with UCX support.</li>

    <li> In the Open MPI v4.0.x series, the <code>openib</code> BTL
    will still be used &mdash; by default &mdash; for RoCE and iWARP networks
    (although UCX works fine with these networks, too).  Users can
    force the use of UCX for RoCE and iWARP networks, if desired (see
    <a href="<?php print($topdir);
    ?>/faq/?category=openfabrics#run-ucx">this FAQ item</a>).</li>

</ul></p>
</li>

<!-- ------------------- -->

<li> Open MPI v4.0.x is ABI compatible with Open MPI 3.0.x and
v3.1.x.

<p>Even though Open MPI changed its major version from 3 to 4, it
remains ABI-compatible with the v3.0.x and v3.1.x release series.</p>

<p>Note that other backwards-incompatible changes occurred &mdash;
e.g., some MCA parameter names and behaviors changed, some
<code>mpirun</code> command line parameters changed, etc.  Hence, Open
MPI 4.0.x is not fully, 100% backwards-compatibile <a href="<?php
print($topdir); ?>/software/ompi/versions/">as defined by Open MPI's
version number / backwards compatibility scheme</a>, but it is
<em>ABI</em> compatibile (which is what most users will notice).</p>

</li>

<!-- ------------------- -->

<li> Open MPI now "prefers" external <code>hwloc</code> and
<code>libevent</code> installations.

<p>Open MPI still embeds <code>hwloc</code> and <code>libevent</code>
source code in its release packages, and will automatically use them
if no suitable version is found when Open MPI is built.  However, if a
suitable external version of [hwloc] and/or [libevent] (and their
corresponding development headers) is found on the system during Open
MPI's configuration process, then Open MPI will ignore its embedded
copy and use the system version, instead.</p>

</li>

<?php
  include_once("$topdir/includes/footer.inc");
?>
