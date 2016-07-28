<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 09:46:01 2007" -->
<!-- isoreceived="20070829134601" -->
<!-- sent="Wed, 29 Aug 2007 09:45:56 -0400" -->
<!-- isosent="20070829134556" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Thoughts on tagging..." -->
<!-- id="2510F74F-8939-49DC-83ED-E1835AF07E24_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070827154502.GI12598_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-29 09:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Jeff Squyres: "[MTT devel] Next Tuesday"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Humm.
<br>
<p>How do we deal with row # now that we don't have temporary tables? I  
<br>
remember having to hack around this a bit to get it to work.
<br>
<p>What I was initially thinking was that we would tag each row with  
<br>
it's corresponding triplet [mpi_install_id, test_build_id,  
<br>
test_run_id] then use the appropriate ID when executing the query.  
<br>
All three for all three phases, test_run_id for test_run phase, etc.
<br>
<p>The tag table fields would look something like:
<br>
tag_id, tag, mpi_install_id, test_build_id, test_run_id
<br>
<p>So a single triplet can still be associated with multiple tags.
<br>
<p>Something to ponder some more before next weeks meeting.
<br>
<p>-- Josh
<br>
<p>On Aug 27, 2007, at 11:45 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; With regards to a Gmail-style interface for labeling, got a
</span><br>
<span class="quotelev1">&gt; comment/concern on the SQL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, when cherry-picking was implemented (for performance
</span><br>
<span class="quotelev1">&gt; reports), we attempted to compose a WHERE clause that would
</span><br>
<span class="quotelev1">&gt; effect the cherry-pick. This led to some wild WHERE clauses.
</span><br>
<span class="quotelev1">&gt; E.g., consider the following example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   +---+----+----+----+---+
</span><br>
<span class="quotelev1">&gt;   |#  |A   |B   |C   |D  |
</span><br>
<span class="quotelev1">&gt;   +---+----+----+----+---+
</span><br>
<span class="quotelev1">&gt;   |1  |1   |2   |3   |4  |
</span><br>
<span class="quotelev1">&gt;   |2  |5   |6   |7   |8  |
</span><br>
<span class="quotelev1">&gt;   |3  |9   |10  |11  |12 |
</span><br>
<span class="quotelev1">&gt;   |4  |28  |10  |11  |12 |
</span><br>
<span class="quotelev1">&gt;   |5  |29  |10  |11  |12 |
</span><br>
<span class="quotelev1">&gt;   +---+----+----+----+---+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we want to cherry-pick lines 1, 2 and 3, then our WHERE
</span><br>
<span class="quotelev1">&gt; clause will look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   SELECT blah blah FROM blah,blah
</span><br>
<span class="quotelev1">&gt;   WHERE
</span><br>
<span class="quotelev1">&gt;    (A=1 AND B=2  AND C=3   AND D=4) OR
</span><br>
<span class="quotelev1">&gt;    (A=5 AND B=6  AND C=7   AND D=8) OR
</span><br>
<span class="quotelev1">&gt;    (A=9 AND B=10 AND C=11  AND D=12)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We eventually chose do the filtering in PHP on row # since
</span><br>
<span class="quotelev1">&gt; there does not seem to be a good way to filter by row # in
</span><br>
<span class="quotelev1">&gt; SQL. The point being, a nasty WHERE clause *could* lead to a
</span><br>
<span class="quotelev1">&gt; loooong tag operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given the above, a good starting point might be to restrict
</span><br>
<span class="quotelev1">&gt; tagging to the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. Allow tagging only on entire reports
</span><br>
<span class="quotelev1">&gt;   2. Allow tagging only on a single row at a time
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug/24/2007 03:07:54PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I volunteered to do this on the call today.  Here's my thoughts on
</span><br>
<span class="quotelev2">&gt;&gt; tagging:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. From the client, it would be nice to be able to specify a comma-
</span><br>
<span class="quotelev2">&gt;&gt; delimited list of tags at any phase.  Tags would be inherited by
</span><br>
<span class="quotelev2">&gt;&gt; successive phases if not explicitly overridden.  E.g., if you specify
</span><br>
<span class="quotelev2">&gt;&gt; a &quot;foo&quot; tag in an MPI get, it'll be used in all phases that use that
</span><br>
<span class="quotelev2">&gt;&gt; MPI get.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tags can be specified in one of three forms:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    +foo: means to *add* this tag to the existing/inherited set
</span><br>
<span class="quotelev2">&gt;&gt;    -foo: means to *remove* this tag from the existing/inherited set
</span><br>
<span class="quotelev2">&gt;&gt;    foo: if any tag does not have a +/- prefix, then the inherited set
</span><br>
<span class="quotelev2">&gt;&gt; is cleared, effectively making the current set of tags be only the
</span><br>
<span class="quotelev2">&gt;&gt; non-prefixed tags and +tags
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    [MPI Get: AAA]
</span><br>
<span class="quotelev2">&gt;&gt;    # + and - have little meaning for MPI Get
</span><br>
<span class="quotelev2">&gt;&gt;    tags = foo, bar, baz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    [Test Get: BBB]
</span><br>
<span class="quotelev2">&gt;&gt;    # + and - have little meaning for Test Get
</span><br>
<span class="quotelev2">&gt;&gt;    tags = yar, fweezle, bozzle
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    [Test Build: CCC]
</span><br>
<span class="quotelev2">&gt;&gt;    # Test build inherits tags from MPI Get and Test Get
</span><br>
<span class="quotelev2">&gt;&gt;    tags = +fa-schizzle, -yar
</span><br>
<span class="quotelev2">&gt;&gt;    # Resulting tag set: foo, bar, baz, fweezle, bozzle, fa-schizzle
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    [Test build: DDD]
</span><br>
<span class="quotelev2">&gt;&gt;    # Override everything
</span><br>
<span class="quotelev2">&gt;&gt;    tags = yowza, gurple
</span><br>
<span class="quotelev2">&gt;&gt;    # Resulting tag set: yowza, gurple
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. For the reporter, I think we only want authenticated users to be
</span><br>
<span class="quotelev2">&gt;&gt; able to create / manipulate tags.  Authentication can be via SVN
</span><br>
<span class="quotelev2">&gt;&gt; username / password or the HTTPS submit username / password; I don't
</span><br>
<span class="quotelev2">&gt;&gt; have strong preferences.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone can query on tags, of course.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. We should have easy &quot;add these results to a tag&quot; and &quot;remove these
</span><br>
<span class="quotelev2">&gt;&gt; results from a tag&quot; operations, similar to GMail/labels.  I think the
</span><br>
<span class="quotelev2">&gt;&gt; rule should be that if you can show MPI details (i.e., not the
</span><br>
<span class="quotelev2">&gt;&gt; summary page), you can add/remove tags.  Perhaps something as simple
</span><br>
<span class="quotelev2">&gt;&gt; as a text box with two buttons: Add tag, Remove tag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3a. Example: you drill down to a set of test runs.  You type in &quot;jeff
</span><br>
<span class="quotelev2">&gt;&gt; results&quot; in the text box and click the &quot;add tag&quot; button.  This adds
</span><br>
<span class="quotelev2">&gt;&gt; the tag &quot;jeff results&quot; to all the result rows that are checked (it is
</span><br>
<span class="quotelev2">&gt;&gt; not an error if the &quot;jeff results&quot; tag already exists on some/all of
</span><br>
<span class="quotelev2">&gt;&gt; the result rows).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3b. Example: you drill down to a set of test runs.  You type in &quot;jeff
</span><br>
<span class="quotelev2">&gt;&gt; results&quot; in the text box and click on the &quot;remove tag&quot; button.  This
</span><br>
<span class="quotelev2">&gt;&gt; removes the tag &quot;jeff results&quot; from all the result rows that are
</span><br>
<span class="quotelev2">&gt;&gt; checked (it is not an error if the jeff results&quot; tag is not on some/
</span><br>
<span class="quotelev2">&gt;&gt; all of the result rows).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Per Gmail index label listing, it would be nice to see a list of
</span><br>
<span class="quotelev2">&gt;&gt; tags that exist on a given result row.  It could be as simple as
</span><br>
<span class="quotelev2">&gt;&gt; adding another show/hide column for the tags on a given result row.
</span><br>
<span class="quotelev2">&gt;&gt; But it gets a little more complicated because one row many represent
</span><br>
<span class="quotelev2">&gt;&gt; many different results -- do we show the union of tags for all the
</span><br>
<span class="quotelev2">&gt;&gt; rollup rows?  Maybe we can use different colors / attributes to
</span><br>
<span class="quotelev2">&gt;&gt; represent &quot;this tag exists on *some* of the results in this row&quot; vs.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;this tag exists on *all* of the results in this row&quot;...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4a. If the tags are listed as a column, they should also (of course)
</span><br>
<span class="quotelev2">&gt;&gt; be clickable so that if you click on them, you get the entire set of
</span><br>
<span class="quotelev2">&gt;&gt; results associated with that tag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4b. For every tag on a rollup row, it would be good to be able to say
</span><br>
<span class="quotelev2">&gt;&gt; &quot;apply this tag to every result in this rollup row&quot; (i.e., this tag
</span><br>
<span class="quotelev2">&gt;&gt; had previously only applied to *some* of the results in this rollup
</span><br>
<span class="quotelev2">&gt;&gt; row).  This could be displayed as a little &quot;+&quot; icon next to the tag
</span><br>
<span class="quotelev2">&gt;&gt; name, or somesuch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4c. Similarly, for every tag, it would be good to have a &quot;remove this
</span><br>
<span class="quotelev2">&gt;&gt; tag from every result in this row&quot;.  This could be displayed as a
</span><br>
<span class="quotelev2">&gt;&gt; little &quot;-&quot; icon next to the tag name, or somesuch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4d. Care would need to be taken to ensure that users would not
</span><br>
<span class="quotelev2">&gt;&gt; accidentally click on &quot;+&quot; or &quot;-&quot; icons next to tag names, however.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. There should also be a simple way to:
</span><br>
<span class="quotelev2">&gt;&gt;     - see all available tags (perhaps including some kind of
</span><br>
<span class="quotelev2">&gt;&gt; indication of how many results that tag represents)
</span><br>
<span class="quotelev2">&gt;&gt;     - completely delete a tag from the entire database
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. Tags may span multiple phases (install, build, run).  If you click
</span><br>
<span class="quotelev2">&gt;&gt; on a tag that contains results on all three phases, what should
</span><br>
<span class="quotelev2">&gt;&gt; happen?  I think it should be context-sensitive:
</span><br>
<span class="quotelev2">&gt;&gt;     - If you are in a summary environment, you get a summary table
</span><br>
<span class="quotelev2">&gt;&gt; showing all relevant results.
</span><br>
<span class="quotelev2">&gt;&gt;     - If you are in a single phase environment, you see only the
</span><br>
<span class="quotelev2">&gt;&gt; results in that phase (perhaps with a clickable icon to see the
</span><br>
<span class="quotelev2">&gt;&gt; entire summary table with all the tag's results).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7. Lots of things can, by default, become tags.  E.g., org name and
</span><br>
<span class="quotelev2">&gt;&gt; platform name can become default tags.  I.e., results that are
</span><br>
<span class="quotelev2">&gt;&gt; submitted will automatically have the org name and platform name
</span><br>
<span class="quotelev2">&gt;&gt; added to the results as tags.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Jeff Squyres: "[MTT devel] Next Tuesday"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Ethan Mallove: "Re: [MTT devel] Thoughts on tagging..."</a>
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
